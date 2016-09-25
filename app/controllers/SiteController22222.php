<?php

class SiteController extends BaseController {

    public function __construct() {
        parent::__construct();
        //$this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('site', array('only' => array('getAds', 'getFav', 'getSendmessage', 'getReport', 'getReportcomm')));
    }

    public function getIndex() {
        


        $products = Ads::orderBy('id' , 'desc')->take(20)->get();


        $cat = array();

        foreach (City::all() as $mods) {
            $cat[$mods->id] = $mods->city_name;
        }
        
        
         // ads with  star favorit
       $products2 = Ads::where('ad_status' , '=' , 1)
                     ->where('ad_paned' , '=' , 0)
                     ->where('ad_type' , '=' , 1)
                     ->orderBy('created_at' , 'desc')->get();
         // ads normal  not favorit
        $products3 = Ads::where('ad_status' , '=' , 2)
                     ->where('ad_paned' , '=' , 0)
                     ->where('ad_type' , '=' , 1)
                     ->orderBy('created_at' , 'desc')->paginate(30);
        
        
        
        
          // requst with  star favorit
       $products22 = Ads::where('ad_status' , '=' , 1)
                     ->where('ad_paned' , '=' , 0)
                     ->where('ad_type' , '=' , 2)
                     ->orderBy('created_at' , 'desc')->get();
        // requst normal  not favorit
        $products33 = Ads::where('ad_status' , '=' , 2)
                     ->where('ad_paned' , '=' , 0)
                     ->where('ad_type' , '=' , 2)
                     ->orderBy('created_at' , 'desc')->paginate(10);


        return View::make('site.index')
                        ->with('ads22', $products22)
                        ->with('ads33', $products33)

                        ->with('ads2', $products2)
                        ->with('ads3', $products3)
            
            
                        ->with('ads', $products)
                        ->with('city', $cat);
    }

    public function getAds() {

        $mod = array();

        foreach (City::all() as $mods) {
            $mod[$mods->id] = $mods->city_name;
        }

        $modss = array();

        foreach (Section::all() as $moda) {
            $modss[$moda->id] = $moda->section_name;
        }

        $make = array();

        foreach (Make::all() as $mk) {
            $make[$mk->id] = $mk->make_name;
        }
        return View::make('site.ads')
                        ->with('city', $mod)
                        ->with('section', $modss)
                        ->with('make', $make);
    }

    public function postCreate() {


        $validator = Validator::make(Input::all(), Ads::$rules);
        if ($validator->passes()) {
            
            

            
            
            

            
            
             /*
            
             add system that count ads for users and manage it
            
            
            */



            $numads = Ads::where('user_id', '=', Auth::user()->id)->count();

            $main = DB::table('mainsettings')->orderBy('created_at', 'desc')->first();
            $sads1 = $main->site_ads_1;
            $sads2 = $main->site_ads_2;



            if ($numads == $sads1) {
                if (Auth::User()->admin == 2) {
                    return Redirect::back()
                                    ->with('no', '  لا يمكن اضافه عدد اكبر من "' . $sads1 . '" اعلان لان هذا المسموح بصلاحيات عضويتك ');
                }
            }
            if ($numads == $sads2) {
                if (Auth::User()->admin == 3) {
                    return Redirect::back()
                                    ->with('no', '  لا يمكن اضافه عدد اكبر من "' . $sads2 . '" اعلان لان هذا المسموح بصلاحيات عضويتك ');
                }
            }



            /*
            
             image system that  manage user system for num  of upload image
            
            
            */

            $main = DB::table('mainsettings')->orderBy('created_at', 'desc')->first();
            $s1 = $main->site_1;
            $s2 = $main->site_2;

            $aray = Input::get('images');

            if (count($aray) > $s1) {
                if (Auth::User()->admin == 2) {
                    return Redirect::back()
                                    ->with('no', '  عدد الصور  اكبر من  "' . $s1 . '"  و هذه منافي لصلاحياتك       ');
                }
            }

            if (count($aray) > $s2) {
                if (Auth::User()->admin == 3) {
                    return Redirect::back()
                                    ->with('no', '  عدد الصور  اكبر من  "' . $s2 . '"  و هذه منافي لصلاحياتك       ');
                }
            }
            
            
            $ads = new Ads;
            $ads->ad_title = Input::get('ad_title');
            $ads->ad_type = Input::get('ad_type');
            $ads->section_id = Input::get('section_id');
            $ads->city_id = Input::get('city_id');
            
            
            if (Input::has('make_id')) {
                $ads->make_id = Input::get('make_id');
            } else {
                $ads->make_id = 0;
            }
            
            
              if ( Input::has('model_id')) {
                $ads->model_id = Input::get('model_id');
            } else {
                $ads->model_id = 0;
            }




            $ads->year_id = Input::get('year_id');
            $ads->aqar_type = Input::get('aqar_type');
            $ads->ad_tags = Input::get('ad_tags');

            if ( Input::has('ad_status')) {
                $ads->ad_status = Input::get('ad_status');
            } else {
                $ads->ad_status = 0;
            }
            $ads->allow_comment = Input::get('allow_comment');

            $ads->ad_contact = Input::get('ad_contact');
            $ads->ad_allow = 0;
            $ads->user_id = Auth::User()->id;
            $ads->ad_paned = 0;
            $ads->description = Input::get('description');
            
            
            

            
            
            $ads->image = json_encode(Input::get('images'));

            $ads->save();
            return Redirect::to('site/index')
                            ->with('yes', 'تم اضافه اعلانك بنجاح ');
        }
        return Redirect::back()
                        ->withErrors($validator)
                        ->with('yes', 'لقد حدث خطاء برجاء اتباع التعليمات ')
                        ->withInput();
    }

    public function getAdv($id) {

        $ads = Ads::find($id);

        $idd = $ads['id'];
        $comment = Comm::where('comment_ads_id', '=', $idd)
                ->orderBy('id', 'asc')
                ->get();


        if ($idd) {

            return View::make('site.adv')
                            ->with('a', $ads)
                            ->with('comm', $comment);
        }

        return View::make('errors.404');
    }
    
    
    public function getAlluserads($user_id){
        
        
        $adsuser = Ads::where('user_id' , '=' ,$user_id )->paginate(10);
        
        return View::make('site.useradv')
            ->with('ads' ,$adsuser )
            ->with('ads2', Ads::orderBy('id' , 'desc')->get());

    
    
    
    }
    
    public function getAllcityads($city_id){
        
        
        $adsuser = Ads::where('city_id' , '=' ,$city_id )->paginate(10);
        
        return View::make('site.cityadv')
            ->with('ads' ,$adsuser )
            ->with('ads2', Ads::orderBy('id' , 'desc')->get());

    
    
    
    }

    public function postSendcomment($id) {

        $validator = Validator::make(Input::all(), Comm::$rules);

        if ($validator->passes()) {
            $ads = Ads::find($id);
            $comm = new Comm;
            $comm->comment_text = Input::get('comment_text');
            $comm->comment_user_id = Auth::User()->id;
            $comm->comment_is_approve = 1;
            $comm->comment_ads_id = $ads['id'];
            $comm->save();
            return Redirect::back()
                            ->with('alert', 'لقد تم ارسال التعليق بنجاح ');
        }
    }

    public function getMyads() {

        $ads = Ads::where('user_id', '=', Auth::User()->id)->get();

        return View::make('site.myads')
                        ->with('ads', $ads);
    }

    public function getShowimage() {

        return View::make('site.showimage')
                        ->with('ads', Ads::all());
    }

    public function getContactus() {

        return View::make('site.contactus');
    }

    public function postSend() {
        if (isset($_POST['send'])) {
            $to = "fo2ad.mahmoud@gmail.com";
            $subject = $_POST['subject'];
            $message = 'رساله من : ( ' . $_POST['email'] . ' )  :- ';
            $message = $_POST['message'];
            $mail = mail($to, $subject, $message);
            if ($mail) {

                return Redirect::to('/')
                                ->with('alert', 'تم ارسال رسالتك سيتم بنجاح');
            } else {
                echo '<div class="warning">حدث خطأ أثناء عملية الإرسال .. حاول مجدداً</div>';
            }
        }
    }

    public function getFav($id) {
        $ins = DB::table('favorit')->insert(
                array('user_id' => Auth::User()->id, 'ads_id' => $id)
        );
        if ($ins) {
            return Redirect::back()
                            ->with('alert', 'تم اضافه الاعلان الي مفضلتك بنجاح ');
        }
    }

    public function getShowfav() {
        $fav = Fav::where('user_id', '=', Auth::User()->id)->get();
        return View::make('site.fav')
                        ->with('ads', $fav);
    }

    public function getDeletefav($id) {
        $faa = Fav::find($id);
        if ($faa) {
            $faa->delete();
            return Redirect::back()
                            ->with('alert', 'تم حذف الاعلان من المفضله بنجاح ');
        }
        return App::abort(404);
    }

    public function getCommession() {
        return View::make('site.commession');
    }

    public function postSendcomm() {
        if (isset($_POST['submit'])) {
            $message = 'قام : ' . $_POST['moneysender'] .
                    ' وعضويتة في الموقع : ' . $_POST['username'] .
                    ' بإرسال مبلغ : ' . $_POST['price'] .
                    ' ريال علي بنك : ' . $_POST['bank'] .
                    ' وبريده الإلكتروني هو : ' . $_POST['email'] .
                    ' رقم الإعلان هو : ' . $_POST['adnum'];
            $email = 'fo2ad.mahmoud@gmail.com';
            $subject = 'تم ارسال مبلغ عمولة من أحد الأعضاء';
            if (mail($email, $subject, $message)) {
                return Redirect::back()
                                ->with('alert', 'تم ارسال نموذج العموله ');
            } else {
                echo '<div class="info">حدث خطأ أثناء الإرسال</div>';
            }
        }
    }

    public function getChangepass($id) {

        return View::make('site.change')
                        ->with('pass', User::find($id));
    }

    public function postChangepass($id) {
        $validator = Validator::make(Input::all(), User::$rules5);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('/')
                            ->with('yes', 'تم تغير كلمه السر بنجاح');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء في تعديل البيانات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getFindads() {




        $search = htmlentities(Input::get('id'));
        $searchid = Ads::where('id', 'LIKE', '%' . $search . '%')
                ->first();
        $idd = Ads::find($search);
                $comment = Comm::where('comment_ads_id', '=', $search)
                ->orderBy('id', 'asc')
                ->get();
        
        if($idd){
            


        return View::make('site.adv')
                        ->with('a', $searchid)
                        ->with('comm', $comment);
        
        }
        return View::make('errors.404');



    }
    
    
    public function getNote(){
      return View::make('site.note')
          ->with('ads' , Comm::all() );
    }

    public function getSendmessage($id) {
        $ads = Ads::find($id);
        return View::make('site.message')
                        ->with('ads', $ads);
    }

    public function postSendmessage($user_id) {
        $validator = Validator::make(Input::all(), Message::$rules);
        if ($validator->passes()) {
            $user = new Message;
            $user->message_text = Input::get('message_text');
            $user->message_title = Input::get('message_title');
            $user->message_to = $user_id;
            $user->message_from = Auth::User()->id;
            $user->save();
            return Redirect::to('/')
                            ->with('alert', 'تم ارساله الرساله بنجاح ');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء في ارسال الرساله  ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getShowmessage() {
        $mess = Message::where('message_to', '=', Auth::User()->id)->get();
        return View::make('site.showmessage')
                        ->with('ads', $mess);
    }

    public function getDeletemessage($id) {

        $message = Message::find($id);
        if ($message) {
            $message->delete();
            return Redirect::back()
                            ->with('alert', 'تم حذف  الرساله بنجاح ');
        }
    }

    public function getReadmessage($id) {

        return View::make('site.readmessage')
                        ->with('mess', Message::find($id));
    }

    public function postReplymessage($user_id) {
        $validator = Validator::make(Input::all(), Message::$rules2);
        if ($validator->passes()) {
            $user = new Message;
            $user->message_text = Input::get('message_text');
            $user->message_title = 'بخصوص رسالتك المرسله الي ';
            $user->message_to = $user_id;
            $user->message_from = Auth::User()->id;
            $user->save();
            return Redirect::to('/')
                            ->with('alert', 'تم ارساله الرساله بنجاح ');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء في ارسال الرساله  ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getReport($id) {

        $ids = Ads::find($id);
        return View::make('site.sendreport')
                        ->with('s', $ids);
    }

    public function postSendreport($id) {
        $validator = Validator::make(Input::all(), Report::$rules);
        if ($validator->passes()) {
            $comid = Ads::find($id);
            $user = new Report;
            $user->report_comment = Input::get('report_comment');
            $user->ad_id = $comid['id'];
            $user->user_id = Auth::User()->id;
            $user->save();
            return Redirect::to('/')
                            ->with('alert', 'تم ارساله التبليغ  بنجاح ');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء في ارسال الرساله  ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function postSendreport2($id) {
        $validator = Validator::make(Input::all(), Report::$rules);
        if ($validator->passes()) {
            $comid = Comm::find($id);
            $user = new Report2;
            $user->report_comment = Input::get('report_comment');
            $user->comm_id = $comid['id'];
            $user->user_id = Auth::User()->id;
            $user->save();
            return Redirect::to('/')
                            ->with('alert', 'تم ارساله التبليغ  بنجاح ');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء في ارسال الرساله  ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getReportcomm($id) {

        $ids = Comm::find($id);
        return View::make('site.sendreportcomm')
                        ->with('s', $ids);
    }

    public function postSendreportcomm($id) {
        $validator = Validator::make(Input::all(), Report::$rules);
        if ($validator->passes()) {
            $comid = Comm::find($id);
            $user = new Report;
            $user->ad_id = 0;
            $user->report_comment = Input::get('report_comment');
            $user->comm_id = $comid['id'];
            $user->user_id = Auth::User()->id;
            $user->save();
            return Redirect::to('/')
                            ->with('alert', 'تم ارساله التبليغ  بنجاح ');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء في ارسال الرساله  ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getForgetpass() {

        return View::make('site.forgetpass');
    }

    public function postResetpass() {

        $reset = User::where('email', '=', Input::get('email'))->first();
        if ($reset) {
            $mail = $reset->email;
            $code = $reset->reset_code;
            $url = URL::to('site/changeresetpassstep1/' . $code);


            $mail = mail($mail, 'تغير كلمه السر ', $url);
            if ($mail) {
                return Redirect::back()
                                ->with('alert', 'لقد تم ارسال رابط تغير كلمه  السر الي بريدك المسجل لدينا ');
            }
        } else {

            return Redirect::back()
                            ->with('no', 'الايميل  غير موجود في قاعده البيانات');
        }
    }

    public function getChangeresetpassstep1($code) {
        $codconf = User::where('reset_code', '=', $code)->first();
        $resetcodefunc = $codconf->reset_code;

        return View::make('site.resetforgetpass')
                        ->with('code', $resetcodefunc);
    }

    public function postChangeresetpass($code) {

        $reset2 = User::where('reset_code', '=', $code)->first();

        if ($reset2->count()) {
            $userid = $reset2->id;
            $user = User::find($userid);
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('/')
                            ->with('alert', 'تم تغير كلمه السر بنجاح');
        }
    }

    public function getCat($id) {

        $allads = Ads::where('section_id', '=', $id)->paginate(30);

        return View::make('site.cat')
                        ->with('ads', $allads)
                        ->with('ads2', Ads::orderBy('id' , 'desc')->get());
    }

    public function getSearchads() {
        return View::make('site.searchads')
                        ->with('ads', Ads::searchads());
    }

    public function getRegisternew() {
        return View::make('site.registernew');
    }

    public function postCreateuserrigster() {
        $validator = Validator::make(Input::all(), User::$rules8);
        if ($validator->passes()) {
            $user = new User;
            $user->first_name = Input::get('first_name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->admin = 2;
            $user->active = 1;
            $user->reset_code = str_random(10);
            $user->save();

            return Redirect::to('/')
                            ->with('alert', 'تم التسجيل بجاح يمكنك تسجيل الدخول');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  اضافه  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getPermission() {
        return View::make('site.permission');
    }

    public function getDiscount() {
        return View::make('site.discount');
    }

    public function getNotallowed() {
        return View::make('site.notallowed');
    }

    public function getMake($id) {

        $makeid = Make::find($id);
        $makeid = $makeid['id'];

        $add = Ads::where('make_id', '=', $makeid)->get();

        return View::make('site.make')
                        ->with('ads', $add);
    }

    public function postAqarsearch() {
        return View::make('site.aqarsearch')
                        ->with('ads', Ads::searchaqar());
    }

    public function postMopile() {
        return View::make('site.mopile')
                        ->with('ads', Ads::searchmopile());
    }

    public function getBlacklist() {

        return View::make('site.blacklist');
    }

    public function postSearchblacklist() {
        $input = Input::get('black');
        $userblack = User::where('first_name', '=', $input)
                ->orwhere('id', '=', $input)
                ->first();


        if ($userblack) {
            if ($userblack->active == 2) {

                return Redirect::back()
                                ->with('alert', 'العضو الذي بحثت عنه  موجود فعلا  في القائمه السوداء و يحذر الموقع من التعامل معه ');
            } else {

                return Redirect::back()
                                ->with('yes', ' العضو الذي بحثت عنه  غير موجود في القائمه السوداء ');
            }
        } else {

            return Redirect::back()
                            ->with('yes', 'العضو الذي بحثت عنه  غير موجود في قاعده البيانات  ');
        }
    }

    public function getEditmyads($id) {
        $mod = array();

        foreach (City::all() as $mods) {
            $mod[$mods->id] = $mods->city_name;
        }

        $modss = array();

        foreach (Section::all() as $moda) {
            $modss[$moda->id] = $moda->section_name;
        }

        $make = array();

        foreach (Make::all() as $mk) {
            $make[$mk->id] = $mk->make_name;
        }
        $adse = Ads::find($id);
        return View::make('site.editmyads')
                        ->with('ads', $adse)
                        ->with('city', $mod)
                        ->with('section', $modss)
                        ->with('make', $make);
    }

    public function postUpdatemyads($id) {


        $validator = Validator::make(Input::all(), Ads::$rules);
        if ($validator->passes()) {
            
            
            $aray = Input::get('images');
            $im = Ads::where('id', '=', $id)->first();
            $imgg = json_decode($im->image);


            $main = DB::table('mainsettings')->orderBy('created_at', 'desc')->first();
            $s1 = $main->site_1;
            $s2 = $main->site_2;

            if (count($aray) or count($imgg) > $s1) {
                if (Auth::User()->admin == 2) {
                    return Redirect::back()
                                    ->with('no', '  عدد الصور  اكبر من  "' . $s1 . '"  و هذه منافي لصلاحياتك       ');
                }
            }

            if (count($aray) or count($imgg) > $s2) {
                if (Auth::User()->admin == 3) {
                    return Redirect::back()
                                    ->with('no', '  عدد الصور  اكبر من  "' . $s2 . '"  و هذه منافي لصلاحياتك       ');
                }
            }



            
            
            $ads = Ads::find($id);
            $ads->ad_title = Input::get('ad_title');
            $ads->ad_type = Input::get('ad_type');
            $ads->section_id = Input::get('section_id');
            $ads->city_id = Input::get('city_id');
            
            if (Input::has('make_id')) {
                $ads->make_id = Input::get('make_id');
            } else {
                $ads->make_id = 0;
            }
            
            
              if ( Input::has('model_id')) {
                $ads->model_id = Input::get('model_id');
            } else {
                $ads->model_id = 0;
            }



            $ads->year_id = Input::get('year_id');
            $ads->aqar_type = Input::get('aqar_type');
            $ads->ad_tags = Input::get('ad_tags');
            
            

          if ( Input::has('ad_status')) {
                $ads->ad_status = Input::get('ad_status');
            } else {
                $ads->ad_status = 0;
            }
            
           $ads->allow_comment = Input::get('allow_comment');

            
            
            
            $ads->ad_contact = Input::get('ad_contact');
            $ads->ad_allow = 0;
            $ads->ad_paned = 0;
            $ads->description = Input::get('description');
            
            
            
            
           #######################3


            $images = json_decode($ads->image, true);
            if (Input::has('delete_image')) {

                foreach (Input::get('delete_image') as $img) {
                    if ($img and file_exists('assets/admin/img/tmp/' . $img)) {

                        File::delete('/assets/admin/img/tmp/' . $img);
                        if (($key = array_search($img, $images)) !== false) {
                            unset($images[$key]);
                        }
                    }
                }
            }
            if (Input::has('images')) {
                $images = array_merge($images, Input::get('images'));
            }


            $ads->image = json_encode($images);

            #################
            
            
            
            
            $ads->save();
            return Redirect::to('site/index')
                            ->with('yes', 'تم نعديل  اعلانك بنجاح ');
        }
        return Redirect::back()
                        ->with('yes', 'لقد حدث خطاء برجاء اتباع التعليمات ')
                        ->withInput();
    }

    public function getDeletemyads($id) {

        $deletemyad = Ads::find($id);
        if ($deletemyad) {
            File::delete($deletemyad->image);
            $deletemyad->delete();


            return Redirect::back()
                            ->with('alert', 'تم حذف الاعلان بنجاح ');
        }

        return View::make('errors.404');
    }

    public function getSearchcars() {
        return View::make('site.searchcars')
                        ->with('ads', Ads::searchcars());
    }
    
        public function postModajax() {
        if (Input::get('make_id')) {
            $towns = Mod::where('make_id', '=', Input ::get('make_id'))->get()->toJson();
            return $towns;
        }
    }

    public function postModpr() {
        if (Input::get('id')) {
            $adsajax = Ads::where('id', '=', Input::get('id'))->first()->toJson();
            return $adsajax;
        }
    }
    
    
        public function postUploadimage() {

     
            $file = Input::file('image');
            $destinationPath = 'assets/admin/img/tmp/';
            $filename = 'haraj' . "-" . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $images = $filename;
            return $images;
    }


    public function getLoginwithfacebook() {

        // get data from input
        $code = Input::get('login-sub');

        // get fb service
        $fb = OAuth::consumer('Facebook');

        // check if code is valid
        // if code is provided get user data and sign in
        if (!empty($code)) {

            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($fb->request('/me'), true);

            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message . "<br/>";

            //Var_dump
            //display whole array().
            dd($result);
        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return Redirect::to((string) $url);
        }
    }

}
