<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SectionController
 *
 * @author fouad
 */
class AdsController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {
        return View::make('admin.ads.index')
                        ->with('u', Ads::orderBy('id' , 'desc')->paginate(50));
    }

    public function getAdd() {


        $mod = array();

        foreach (Section::all() as $mods) {
            $mod[$mods->id] = $mods->section_name;
        }
        return View::make('admin.ads.add')
                        ->with('section', $mod);
    }

    public function postCreate() {


        $validator = Validator::make(Input::all(), Ads::$rules);
        if ($validator->passes()) {
            $ads = new Ads;
            $ads->ad_title = Input::get('ad_title');
            $ads->ad_type = Input::get('ad_type');
            $ads->section_id = Input::get('section_id');
            $ads->price = Input::get('price');
            $ads->ad_tags = Input::get('ad_tags');
            $ads->star = Input::get('star');
            $ads->ad_time = Input::get('ad_time');

            $ads->description = Input::get('description');
            $ads->user_id = Auth::User()->id;
            $ads->image = json_encode(Input::get('images'));
            $ads->save();



            return Redirect::to('ads/index')
                            ->with('yes', 'تم اضافه الاعلان بنجاح  ');
        }
        return Redirect::back()
                        ->withErrors($validator)
                        ->with('yes', 'لقد حدث خطاء برجاء اتباع التعليمات ')
                        ->withInput();
    }

    public function getEdit($id) {


        $mod = array();

        foreach (Section::all() as $mods) {
            $mod[$mods->id] = $mods->section_name;
        }
        return View::make('admin.ads.edit')
                        ->with('section', $mod)
                        ->with('a', Ads::find($id));
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Ads::$rules);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Ads::find($id);
            $baner->ad_title = Input::get('ad_title');
            $baner->ad_type = Input::get('ad_type');
            $baner->section_id = Input::get('section_id');
            $baner->price = Input::get('price');
            $baner->ad_tags = Input::get('ad_tags');

            $baner->star = Input::get('star');
            $baner->ad_time = Input::get('ad_time');
            $baner->description = Input::get('description');
            $baner->user_id = Auth::User()->id;


            #########################################################33   
            $images = json_decode($baner->image, true);
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


            $baner->image = json_encode($images);



            ########################################################3

            $baner->save();
            return Redirect::to('ads/index')
                            ->with('yes', 'تم تعديل المنتج    بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getShowpaind() {
        return View::make('admin.ads.paind')
                        ->with('u', Ads::Where('ad_paned', '=', 1)
                                ->orderBy('created_at', 'desc')->get());
    }

    public function getAllow($id) {



        $s = Ads::find($id);
        $s->ad_paned = 0;
        $s->save();
        return Redirect::to('ads/index')
                        ->with('yes', 'تم تفعيل الاعلان بنجاح');
    }

    public function getDissallow($id) {



        $s = Ads::find($id);
        $s->ad_paned = 1;
        $s->save();
        return Redirect::to('ads/index')
                        ->with('yes', 'تم تعطيل  الاعلان بنجاح');
    }

    public function getDelete($id) {

        $adsdelee = Ads::find($id);
        if ($adsdelee) {
            $adsdelee->delete();
            return Redirect::to('ads/index')
                            ->with('yes', 'تم مسح الاعلان بنجاح');
        }

        return View::make('errors.404');
    }

    public function postSearch() {
        return View::make('admin.ads.search')
                        ->with('u', Ads::searchadminads());
    }

    public function getReport() {
        return View::make('admin.ads.report')
                        ->with('u', Report::all());
    }

    public function getDeletereports($id) {
        $adsdelee = Report::find($id);
        if ($adsdelee) {
            $adsdelee->delete();
            return Redirect::back()
                            ->with('yes', 'تم مسح التبليغ  بنجاح');
        }

        return View::make('errors.404');
    }

    public function getShowreportsads($id) {
        $rep = Report::find($id);
        return View::make('admin.ads.reports')
                        ->with('r', $rep);
    }

}
