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
class CountryController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.country.index')
                        ->with('u', Country::all());
    }

    public function getAdd() {
        return View::make('admin.country.add');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), Country::$rules);

        if ($validator->passes()) {

            $baner = new Country;
            $baner->country_name = Input::get('country_name');
            $baner->save();
            return Redirect::route('showcountry')
                            ->with('yes', 'تم اضافه الدوله   بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $u = Country::find($id);

        return View::make('admin.country.edit')
                        ->with('u', $u);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Country::$rules);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Country::find($id);
            $baner->country_name = Input::get('country_name');
            $baner->save();
            return Redirect::route('showcountry')
                            ->with('yes', 'تم تعديل الدوله   بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = Country::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::route('showcountry')
                            ->with('yes', 'تم حذف  الدوله   بنجاح');
        }
        return App::abort(404);
    }

}
