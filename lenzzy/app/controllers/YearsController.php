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
class YearsController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.years.index')
                        ->with('u', Years::all());
    }

    public function getAdd() {
        return View::make('admin.years.add');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), Years::$rules);

        if ($validator->passes()) {

            $baner = new Years;
            $baner->year_num = Input::get('year_num');
            $baner->save();
            return Redirect::to('years/index')
                            ->with('yes', 'تم اضافه سنه الصنع  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $u = Years::find($id);

        return View::make('admin.years.edit')
                        ->with('u', $u);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Years::$rules);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Years::find($id);
            $baner->year_num = Input::get('year_num');
            $baner->save();
            return Redirect::to('years/index')
                            ->with('yes', 'تم اضافه سنه الصنع  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = Years::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::to('years/index')
                            ->with('yes', 'تم حذف  سنه الصنع  بنجاح');
        }
        return App::abort(404);
    }

}
