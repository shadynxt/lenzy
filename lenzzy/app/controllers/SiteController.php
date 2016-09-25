<?php

class SiteController extends BaseController {

    public function __construct() {
        parent::__construct();
//$this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('site', array('only' => array('getAds', 'getFav', 'getSendmessage', 'getReport', 'getReportcomm', 'likeajax', 'getCart', 'getAddtocart', 'getAddtocompare', 'getCompare', 'getShowfav')));
    }

    public function getIndex() {

        return View::make('site.index');
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

    public function getAdvsearch() {
        return View::make('site.advsearch');
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
            $ads->subsection_id = Input::get('subsection_id');

            $ads->city_id = Input::get('city_id');


            if (Input::has('make_id')) {
                $ads->make_id = Input::get('make_id');
            } else {
                $ads->make_id = 0;
            }


            if (Input::has('model_id')) {
                $ads->model_id = Input::get('model_id');
            } else {
                $ads->model_id = 0;
            }




            $ads->year_id = Input::get('year_id');
            $ads->aqar_type = Input::get('aqar_type');
            $ads->ad_tags = Input::get('ad_tags');

            if (Input::has('ad_status')) {
                $ads->ad_status = Input::get('ad_status');
            } else {
                $ads->ad_status = 2;
            }
            $ads->allow_comment = Input::get('allow_comment');

            $ads->ad_contact = Input::get('ad_contact');
            $ads->ad_allow = 0;
            $ads->user_id = Auth::User()->id;
            $ads->ad_paned = 0;
            $ads->description = Input::get('description');






            $ads->image = json_encode(Input::get('images'));

            if ($ads->save()) {


                $opject = Follow::where('make_id', '=', $ads->make_id)
                                ->where('model_id', '=', $ads->model_id)->get();


                foreach ($opject as $op) {




                    $opf = new Note;
                    $opf->user_id_to = $op->user_id;
                    $opf->user_id_from = Auth::User()->id;
                    $opf->ad_id = $ads->id;
                    $opf->see = 0;
                    $opf->type = 1;
                    if ($opf->save()) {
                        $username = Ads::getUser($opf->user_id_from);
                        $useremail = Ads::getEmail($opf->user_id_to);
                        $msg = ' لقد قام "' . $username . '"  باضافه ماركه جديده  انت تتابعها   ';
                        mail($useremail, 'اشعار جديد', $msg);
                    }
                }

                return Redirect::to('site/index')
                                ->with('yes', 'تم اضافه الاعلان بنجاح سيتم استخدام اول صوره لتكون الصوره الرئيسيه للاعلان ');
            }
        }
        return Redirect::back()
                        ->withErrors($validator)
                        ->with('yes', 'لقد حدث خطاء برجاء اتباع التعليمات ')
                        ->withInput();
    }

    public function getProduct($id) {
        $ads = Ads::find($id);

        $idd = $ads['id'];
        $idduser = $ads['user_id'];
        $iddmake = $ads['make_id'];
        $work2 = Ads::where('user_id', '=', $idduser)
                        ->orderByRaw("RAND()")
                        ->take(4)->get();

        $work3 = Ads::
                        orderByRaw("RAND()")
                        ->take(5)->get();


        $comment = Comm::where('comment_ads_id', '=', $idd)
                ->orderBy('id', 'asc')
                ->get();


        if ($idd) {

            return View::make('site.adv')
                            ->with('a', $ads)
                            ->with('aduser', $work2)
                            ->with('admake', $work3)
                            ->with('comm', $comment);
        }

        return View::make('errors.404');
    }

    public function getAlluserads($user_id) {


        $adsuser = Ads::
                where('user_id', '=', $user_id)->paginate(10);

        return View::make('site.useradv')
                        ->with('ads', $adsuser)
                        ->with('ads2', Ads::orderBy('id', 'desc')->get());
    }

    public function getAllcityads($city_id) {


        $adsuser = Ads::

                where('city_id', '=', $city_id)->paginate(10);

        return View::make('site.cityadv')
                        ->with('ads', $adsuser)
                        ->with('ads2', Ads::orderBy('id', 'desc')->get());
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
            if ($comm->save()) {

                $object = new Note;
                $object->user_id_to = $ads['user_id'];
                $object->user_id_from = Auth::User()->id;
                $object->ad_id = $ads['id'];
                $object->see = 0;
                if ($object->save()) {
                    $username = Ads::getUser($object->user_id_from);
                    $useremail = Ads::getEmail($object->user_id_to);
                    $msg = ' لقد قام "' . $username . '"  بالرد علي موضوعك    ';
                    mail($useremail, 'اشعار جديد', $msg);
                }
                return Redirect::back()
                                ->with('alert', 'لقد تم ارسال التعليق بنجاح ');
            }
        }
    }

    public function getLogin() {

        return View::make('site.login');
    }

    public function getNew() {

        return View::make('site.newproduct');
    }

    public function getPrice() {

        return View::make('site.priceproduct');
    }

    public function getProductsection() {

        return View::make('site.sectionproduct');
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

    public function getContact() {

        return View::make('site.contactus');
    }

    public function getAbout() {

        return View::make('site.about');
    }

    public function getStratigy() {

        return View::make('site.stratgy');
    }

    public function postSubsc() {

        $validator = Validator::make(Input::all(), Newsletter::$rules1);
        if ($validator->passes()) {

            $news = new Newsletter;
            $news->newsletter_email = Input::get('newsletter_email');
            $news->save();
            return Redirect::to('/')
                            ->with('alert', 'تم الاشتراك في القائمة البريدية بنجاح');
        }
        return Redirect::to('/')
                        ->with('alert', 'يجب وضع ايميل صحيح');
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
                                ->with('alert', 'تم ارسال رسالتك  بنجاح');
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

    public function likeajax() {

        if (Request::ajax()) {
            if (Input::has('postid') and Input::has('type')) {

                if (Input::get('type') == 'like') {
                    $add = new Fav;
                    $add->user_id = Auth::User()->id;
                    $add->ads_id = Input::get('postid');
                    if ($add->save()) {
                        return Response::json(array(true));
                    }
                } else if (Input::get('type') == 'unlike') {

                    $var = Fav::where('user_id', '=', Auth::User()->id)->where('ads_id', '=', Input::get('postid'))->delete();
                    if ($var) {
                        return Response::json(array(true));
                    } else {
                        return Response::json(array(false));
                    }
                }
            }
        }
    }

    public function unlikeajax() {

        if (Request::ajax()) {
            if (Input::has('postid') and Input::has('type')) {

                if (Input::get('type') == 'unlike') {

                    $var = Fav::where('user_id', '=', Auth::User()->id)->where('ads_id', '=', Input::get('postid'))->delete();
                    if ($var) {
                        return Response::json(true);
                    } else {
                        return Response::json(false);
                    }
                }
            }
        }
    }

    public static function countfav($ad_id, $user_id) {

        $vaf = Fav::where('user_id', '=', $user_id)->where('ads_id', '=', $ad_id)->count();
        if ($vaf > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getShowfav() {
        $fav = Fav::where('user_id', '=', Auth::User()->id)->get();
        return View::make('site.fav')
                        ->with('products', $fav);
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
        $opject = new Point;
        $opject->user_id = Input::get('user_id');
        $opject->user_name = Input::get('user_name');
        $opject->money = Input::get('money');
        $opject->bank = Input::get('bank');
        $opject->transfer_name = Input::get('transfer_name');
        $opject->email = Input::get('email');
        $opject->ad_num = Input::get('ad_num');
        $opject->point_desc = Input::get('point_desc');
        $opject->save();
        return Redirect::to('/')
                        ->with('yes', 'تم ارسال  نموذج العموله بنجاح سيتم مراجعتها و الرد عليك ');
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


        $idduser = $idd['user_id'];
        $iddmake = $idd['make_id'];
        $work2 = Ads::where('user_id', '=', $idduser)
                        ->orderByRaw("RAND()")
                        ->take(4)->get();

        $work3 = Ads::
                        orderByRaw("RAND()")
                        ->take(4)->get();




        $comment = Comm::where('comment_ads_id', '=', $search)
                ->orderBy('id', 'asc')
                ->get();

        if ($idd) {



            return View::make('site.adv')
                            ->with('a', $searchid)
                            ->with('aduser', $work2)
                            ->with('admake', $work3)
                            ->with('comm', $comment);
        }
        return View::make('errors.404');
    }

    public function getNote() {
        return View::make('site.note')
                        ->with('ads', Note::orderBy('id', 'desc')
                                ->where('user_id_to', Auth::User()->id)->get());
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
            $user->see = 0;
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

    public function getPoint() {

        return View::make('site.point');
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

        $allads = Ads::

                where('section_id', '=', $id)->paginate(16);

        $sectoion = Section::where('id', '=', $id)->first();

        return View::make('site.cat')
                        ->with('ads', $allads)
                        ->with('ads2', Ads::orderBy('id', 'desc')->get())
                        ->with('section', $sectoion);
    }

    public function getAllproducts() {

        $allads = Ads::orderBy('id', 'desc')->paginate(28);
        return View::make('site.allproducts')
                        ->with('ads', $allads);
    }

    public function getSubcat($id) {

        $allads = Ads::

                where('subsection_id', '=', $id)->paginate(30);

        $sectoion = Subsection::where('id', '=', $id)->first();

        return View::make('site.cat2')
                        ->with('ads', $allads)
                        ->with('ads2', Ads::orderBy('id', 'desc')->get())
                        ->with('section', $sectoion);
    }

    public function getSearchads() {
        return View::make('site.searchads')
                        ->with('ads', Ads::searchads());
    }

    public function getTags($name = "") {

        return View::make('site.searchads')
                        ->with('ads', Ads::searchads2($name));
    }

    public function getRegisternew() {
        return View::make('site.registernew');
    }

    public function getMyprofile() {
        return View::make('site.myprofile');
    }

    public function postCreateuserrigster() {
        $validator = Validator::make(Input::all(), User::$rules8);
        if ($validator->passes()) {
            $user = new User;
            $user->first_name = Input::get('first_name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
//$user->telephone = Input::get('telephone');
//$user->country = Input::get('country');
//$user->account_type = Input::get('account_type');
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

    public function postUpdatepass($id) {
        $validator = Validator::make(Input::all(), User::$rules3);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('site/myprofile')
                            ->with('yes', 'تم  تعديل  كلمه السر  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function postUpdateinfo($id) {
        $validator = Validator::make(Input::all(), User::$rules10);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->first_name = Input::get('first_name');
            $user->email = Input::get('email');

            $user->telephone = Input::get('telephone');

            $user->save();

            return Redirect::to('site/myprofile')
                            ->with('yes', 'تم  تعديل  البيانات  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function postLogin() {
        if (Auth::attempt(array('first_name' => Input::get('first_name'), 'password' => Input::get('password')))) {
            return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
        }

        return Redirect::back()->with('yes', 'كلمه المستخدم / كلمه السر غير صحيح ');
    }

    public function getLogout() {

        Auth::logout();
        return Redirect::to('/')->with('yes', 'تم تسجيل الخروج بنجاح ');
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

        $add = Ads::

                where('make_id', '=', $makeid)->get();

        return View::make('site.make')
                        ->with('ads', $add);
    }

    public function getAllmake() {

        $makeid = Ads::
                orderBy('id', 'desc')->paginate(24);


        return View::make('site.allmake')
                        ->with('ads', $makeid);
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
            $ads->subsection_id = Input::get('subsection_id');
            $ads->city_id = Input::get('city_id');

            if (Input::has('make_id')) {
                $ads->make_id = Input::get('make_id');
            } else {
                $ads->make_id = 0;
            }


            if (Input::has('model_id')) {
                $ads->model_id = Input::get('model_id');
            } else {
                $ads->model_id = 0;
            }



            $ads->year_id = Input::get('year_id');
            $ads->aqar_type = Input::get('aqar_type');
            $ads->ad_tags = Input::get('ad_tags');



            if (Input::has('ad_status')) {
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


        $image = Input::file('image');
        $filename = time('Y-d') . "." . $image->getClientOriginalExtension();
        $path = public_path('assets/admin/img/tmp/' . $filename);

        $img = Image::make($image->getRealPath());

// now you are able to resize the instance
// $img->resize(900, 675);
// and insert a watermark for example
//$img->insert('assets/site/images/logo.png', 'bottom-right');
// finally we save the image as a new file
        $img->save($path);




        $images = $filename;

        return $images;
    }

    public function getLoginwithfacebook() {

// get data from input
        $code = Input::get('code');

// get fb service
        $fb = OAuth::consumer('Facebook');

// check if code is valid
// if code is provided get user data and sign in
        if (!empty($code)) {

// This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken($code);

// Send a request with it
            $result = json_decode($fb->request('/me'), true);

            /*  $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'] . $result['email'];
              echo $message . "<br/>"; */
//   Start here
            $name = $result['name'];
            $email = $result['email'];
            $pass = $result['id'];

            if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
            }
            $user = new User;
            $user->first_name = $name;
            $user->email = $email;
            $user->admin = 2;
            $user->active = 1;
            $user->password = Hash::make($pass);
            if ($user->save()) {
                if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                    return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
                }
            }
            return Redirect::to('/')->with('yes', 'لا يمكنك الدخول بهذه الحساب البريد الاكتروني متطابق لحساب ما ');

//   end  here
        }
// if not ask for permission first
        else {
// get fb authorization
            $url = $fb->getAuthorizationUri();

// return to facebook login url
            return Redirect::to((string) $url);
        }
    }

    public function getLoginwithgoogle() {

// get data from input
        $code = Input::get('code');

// get google service
        $googleService = OAuth::consumer('Google');

// check if code is valid
// if code is provided get user data and sign in
        if (!empty($code)) {

// This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);

// Send a request with it
            $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);

//dd($result);

            $name = $result['name'];
            $email = $result['email'];
            $pass = $result['id'];

            if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
            }

            $user = new User;
            $user->first_name = $name;
            $user->email = $email;
            $user->admin = 2;
            $user->active = 1;
            $user->password = Hash::make($pass);
            if ($user->save()) {
                if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                    return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
                }
            }
            return Redirect::to('/')->with('yes', 'لا يمكنك الدخول بهذه الحساب البريد الاكتروني متطابق لحساب ما ');
        }
// if not ask for permission first
        else {
// get googleService authorization
            $url = $googleService->getAuthorizationUri();

// return to google login url
            return Redirect::to((string) $url);
        }
    }

    public function getLoginwithtwitter() {



// get data from input
        $token = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

// get twitter service
        $tw = OAuth::consumer('Twitter');

// check if code is valid
// if code is provided get user data and sign in
        if (!empty($token) && !empty($verify)) {

// This was a callback request from twitter, get the token
            $token = $tw->requestAccessToken($token, $verify);

// Send a request with it
            $result = json_decode($tw->request('account/verify_credentials.json'), true);

            $name = $result['name'];
//$email = $result['email'];
            $pass = $result['id'];

            if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
            }

            $user = new User;
            $user->first_name = $name;
//$user->email = $email;
            $user->admin = 2;
            $user->active = 1;
            $user->password = Hash::make($pass);
            if ($user->save()) {
                if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                    return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
                }
            }
            return Redirect::to('/')->with('yes', 'لا يمكنك الدخول بهذه الحساب البريد الاكتروني متطابق لحساب ما ');
        }
// if not ask for permission first
        else {
// get request token
            $reqToken = $tw->requestRequestToken();

// get Authorization Uri sending the request token
            $url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

// return to twitter login url
            return Redirect::to((string) $url);
        }
    }

    public function getLoginwithinst() {




        $token = Input::get('code');



        $instagramService = $serviceFactory->createService('instagram', $credentials, $storage, $scopes);
        if (!empty($token)) {
// This was a callback request from Instagram, get the token
            $instagramService->requestAccessToken($_GET['code']);
// Send a request with it
            $result = json_decode($instagramService->request('users/self'), true);



            $name = $result['name'];
            $email = $result['email'];
            $pass = $result['id'];

            if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
            }

            $user = new User;
            $user->first_name = $name;
            $user->email = $email;
            $user->admin = 2;
            $user->active = 1;
            $user->password = Hash::make($pass);
            if ($user->save()) {
                if (Auth::attempt(array('first_name' => $name, 'password' => $pass))) {
                    return Redirect::to('/')->with('yes', 'تم تسجيل الدخول بنجاح ');
                }
            }
            return Redirect::to('/')->with('yes', 'لا يمكنك الدخول بهذه الحساب البريد الاكتروني متطابق لحساب ما ');
        } elseif (!empty($_GET['go']) && $_GET['go'] === 'go') {
            $url = $instagramService->getAuthorizationUri();
            header('Location: ' . $url);
        } else {
            $url = $currentUri->getRelativeUri() . '?go=go';
            echo "<a href='$url'>Login with Instagram!</a>";
        }
    }

    public function getActivemyads($id) {
        $id = Ads::find($id);
        if ($id) {
            $id->ad_allow = 1;
            $id->save();
            return Redirect::to('site/myads')->with('yes', 'تم تفعيل الاعلان بنجاح ');
        }
        return View::make('errors.404');
    }

    public function getDeactivemyads($id) {

        $id = Ads::find($id);
        if ($id) {
            $id->ad_allow = 0;
            $id->save();
            return Redirect::to('site/myads')->with('yes', 'تم تعطيل الاعلان بنجاح ');
        }
        return View::make('errors.404');
    }

    public function getGo($id) {
        $ads = Ads::find($id);

        $idd = $ads['id'];
        $idduser = $ads['user_id'];
        $iddmake = $ads['make_id'];
        $work2 = Ads::where('user_id', '=', $idduser)
                        ->orderByRaw("RAND()")
                        ->take(4)->get();

        $work3 = Ads::
                        orderByRaw("RAND()")
                        ->take(4)->get();


        $comment = Comm::where('comment_ads_id', '=', $idd)
                ->orderBy('id', 'asc')
                ->get();


        if ($idd) {

            return View::make('site.adv')
                            ->with('a', $ads)
                            ->with('aduser', $work2)
                            ->with('admake', $work3)
                            ->with('comm', $comment);
        }

        return View::make('errors.404');
    }

    public function getFollow() {

        return View::make('site.follow');
    }

    public function postPostfollow() {

        $opject = new Follow;
        $opject->make_id = Input::get('make_id');
        $opject->model_id = Input::get('model_id');
        $opject->user_id = Auth::User()->id;
        $opject->save();
        return Redirect::to('site/follow')->with('yes', 'اضافه الماركه الي قائمه المتابعه ');
    }

    public function getDeletef($id) {
        $dd = Follow::find($id);
        if ($dd) {
            $dd->delete();
            return Redirect::to('site/follow')->with('yes', 'تم مسح المتابعه بنجاح ');
        }
    }

    public function postModajax2() {
        if (Input::get('section_id')) {
            $towns = Subsection::where('section_id', '=', Input ::get('section_id'))->get()->toJson();
            return $towns;
        }
    }

    public function postModpr2() {
        if (Input::get('id')) {
            $adsajax = Ads::where('id', '=', Input::get('id'))->first()->toJson();
            return $adsajax;
        }
    }

    public function getAddtocart($id) {
        $product = Ads::find($id);
        $user = Auth::user();

        Cart::insert(array(
            'id' => $product->id,
            'name' => $product->ad_title,
            'description' => $product->description,
            'section_id' => $product->section_id,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image,
            'user' => $user->id
        ));
        return Redirect::to('/')
                        ->with('alert', 'تم اضافه المنتج في السلة ');
    }

    public function addcart() {

        $id = Input::get('postid');
        $product = Ads::find($id);
        $user = Auth::user();

        Cart::insert(array(
            'id' => $product->id,
            'name' => $product->ad_title,
            'description' => $product->description,
            'section_id' => $product->section_id,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image,
            'user' => $user->id
        ));

        $cartexample = "";
        foreach (Cart::contents() as $cartproduct) {
            $img = json_decode($cartproduct->image);
            $cartexample .= '
        <div class = "cart-product">
        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">

        

        <img src = "' . URL::to('assets/admin/img/tmp/' . $img[0]) . '" />
        </div>
        <div class = "col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <a class = "product-title" href = "' . URL::to('site/product/' . $cartproduct->id) . '">
                ' . $cartproduct->name . '
            </a>

            <a href = "' . URL::to('site/remov/' . $cartproduct->identifier) . '"><i class = "fa fa-close"></i></a>
            <span>السعر : 
                    ' . $cartproduct->price . '
                
            ريال</span>
            </div>
            <div class = "clearfix"></div>
            </div>
            
';
        }

        if (count(Cart::contents())) {
            $cartexample .= '   
                                        <div id="all-price">الاجمالي :  ' . Cart::total() . '  ريال</div>';
        }
        $cartexample .= ' 
                                        <a href="' . URL::to('site/cancelcart') . '" id="cart-view"><i class="fa fa-shopping-cart"></i>تفريغ السلة</a>
                                        <a href="' . URL::to('site/cart') . '" id="cart-buy"><i class="fa fa-share"></i>معاينة السلة</a>';




        echo $cartexample;
        // return Response::json(array(true, $cartexample));
//return Redirect::to('/')
//              ->with('alert', 'تم اضافه المنتج في السلة ');
    }

    public function getCart() {

        return View::make('site.cart')
                        ->with('products', Cart::contents());
    }

    public function getRemov($identifier) {

        $item = Cart::item($identifier);
        $item->remove();
        return Redirect::back()
                        ->with('alert', 'تم حذف  المنتج بنجاح');
    }

    public function getCompare() {
        $fav = Compare::orderBy('id', 'desc')->where('user_id', '=', Auth::User()->id)->take(3)->get();
        return View::make('site.compare')
                        ->with('products', $fav);
    }

    public function getDeletecompare($id) {
        $faa = Compare::find($id);
        if ($faa) {
            $faa->delete();
            return Redirect::back()
                            ->with('alert', 'تم حذف الاعلان من المقارنة بنجاح ');
        }
        return App::abort(404);
    }

    public function getAddtocompare($id) {
        $product = Ads::find($id);
        $user = Auth::user();

        Compare::insert(array(
            'ads_id' => $product->id,
            'user_id' => $user->id
        ));
        return Redirect::to('/')
                        ->with('alert', 'تم اضافه المنتج في المقارنة ');
    }

    public function compare() {
        $id = Input::get('postid');
        $product = Ads::find($id);
        $user = Auth::user();

        Compare::insert(array(
            'ads_id' => $product->id,
            'user_id' => $user->id
        ));
        return Response::json(array(true));
    }

    public function getPaylater() {
        $cartcontent = Cart::contents();
        $carttotal = Cart::total();


        if ($cartcontent) {




            $order = new Order;
            $order->user_id = Auth::User()->id;
            $order->price = $carttotal;
            $order->type = ' عند الاستلام';
            $order->finish = 0;
            $order->save();
            foreach ($cartcontent as $cartx) {

                $orderx = new Orderproducts;
                $orderx->order_id = $order->id;
                $orderx->ads_id = $cartx->id;
                $orderx->quantity = $cartx->quantity;
                $orderx->save();
            }
            Cart::destroy();
            return Redirect::back()
                            ->with('alert', 'تم استلام طلبك بنجاح سوف تتواصل معك ادارة الموقع لتوصيل الطلبية ');
        }
        return Redirect::back()
                        ->with('alert', 'لا يوجد سلع في السلة  ');
    }

    public function getCancelcart() {
        Cart::destroy();
        return Redirect::back()
                        ->with('alert', 'تم تفريغ السلة بنجاح ');
    }

    public function addinfo() {
        $user = User::find(Auth::User()->id);
        $user->first_name = Input::get('first_name');
        $user->country = Input::get('country');
        $user->city = Input::get('city');
        $user->state = Input::get('state');
        $user->street = Input::get('street');
        $user->telephone = Input::get('telephone');
        $user->desc_info = Input::get('desc_info');
        $user->save();
    }

}
