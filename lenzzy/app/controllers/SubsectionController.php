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
class SubsectionController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.subsection.index')
                        ->with('u', Subsection::all());
    }

    public function getAdd() {


        $mod = array();

        foreach (Section::all() as $mods) {
            $mod[$mods->id] = $mods->section_name;
        }
        return View::make('admin.subsection.add')
                        ->with('section', $mod);
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), Subsection::$rules);

        if ($validator->passes()) {

            $baner = new Subsection;
            $baner->subsection_name = Input::get('subsection_name');
 
            $baner->section_id = Input::get('section_id');


            $baner->save();
            return Redirect::to('subsection/index')
                            ->with('yes', 'تم اضافه القسم الفرعي  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $mod = array();

        foreach (Section::all() as $mods) {
            $mod[$mods->id] = $mods->section_name;
        }
        $u = Subsection::find($id);

        return View::make('admin.subsection.edit')
                        ->with('u', $u)
                        ->with('section', $mod);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Subsection::$rules2);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Subsection::find($id);
            $baner->subsection_name = Input::get('subsection_name');

            $baner->section_id = Input::get('section_id');

            $baner->save();
            return Redirect::to('subsection/index')
                            ->with('yes', 'تم تعديل القسم الفرعي  بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = Subsection::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::to('subsection/index')
                            ->with('yes', 'تم حذف  القسم الفرعي  بنجاح');
        }
        return App::abort(404);
    }

}
