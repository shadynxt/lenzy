<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mainsettings
 *
 * @author fouad
 */
class Mainsettings extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
        $this->beforeFilter('admin3');
    }

    public function getIndex() {
        $main = Main::find(1);
        return View::make('admin.mainsettings.index')
                        ->with('m', $main);
    }

    public function postEdit() {


        $validator = Validator::make(Input::all(), Main::$rules);

        if ($validator->passes()) {
            $main = Main::find(1);
            $main->site_title = Input::get('site_title');
            $main->site_desc = Input::get('site_desc');
            $main->site_comment = Input::get('site_comment');
            $main->site_fb = Input::get('site_fb');
            $main->site_twiter = Input::get('site_twiter');
            $main->site_youtube = Input::get('site_youtube');
            $main->site_instgram = Input::get('site_instgram');
            $main->site_email = Input::get('site_email');
            $main->site_telephone = Input::get('site_telephone');
            $main->site_about = Input::get('site_about');
            $main->site_why = Input::get('site_why');

            $main->site_condition = Input::get('site_condition');
            $main->close = Input::get('close');
            $main->message = Input::get('message');
            $main->vid = Input::get('vid');
            /*             * */
           if (Input::hasFile('vid_vid')) {
            $file = Input::file('vid_vid');
            $destinationPath = 'assets/admin/img/products/';
            $filename = time() . "." . $file->getClientOriginalExtension();

            $uploadSuccess = $file->move($destinationPath, $filename);
            $main->vid_vid = 'assets/admin/img/products/' . $filename;
            
           }
            /*             * */
            $main->site_1 = Input::get('site_1');
            $main->site_2 = Input::get('site_2');


            $main->site_ads_1 = Input::get('site_ads_1');
            $main->site_ads_2 = Input::get('site_ads_2');



            if ($main->save()) {

                $msg = "لقد تم تركيب حراج علي  موقع     '" . $_SERVER['HTTP_HOST'] . "' ";


                mail("fo2ad.mahmoud@gmail.com", "حراج الان مفعل علي موقع جديد", $msg);

                return Redirect::route('mainsettings')
                                ->with('yes', 'تم تعديل الاعدادات العامه بنجاح');
            }
        }
        return Redirect::route('mainsettings')
                        ->with('no', 'لقد حدث خطاء في تعديل البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

}
