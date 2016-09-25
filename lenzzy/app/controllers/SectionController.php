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
class SectionController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.section.index')
                        ->with('u', Section::all());
    }

    public function getAdd() {

        return View::make('admin.section.add');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), Section::$rules);

        if ($validator->passes()) {

            $baner = new Section;
            $baner->section_name = Input::get('section_name');




            if (Input::hasFile('image')) {
                $image = Input::file('image');
                $filename = 'image1' . time() . "." . $image->getClientOriginalExtension();
                $path = public_path('assets/admin/img/products/' . $filename);
                Image::make($image->getRealPath())->save($path);
                $baner->image = 'assets/admin/img/products/' . $filename;
            }

            if (Input::hasFile('image2')) {
                $image = Input::file('image2');
                $filename = 'image2' . time() . "." . $image->getClientOriginalExtension();
                $path = public_path('assets/admin/img/products/' . $filename);
                Image::make($image->getRealPath())->save($path);
                $baner->image2 = 'assets/admin/img/products/' . $filename;
            }




            $baner->save();
            return Redirect::route('showsection')
                            ->with('yes', 'تم اضافه القسم بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $u = Section::find($id);

        return View::make('admin.section.edit')
                        ->with('u', $u);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Section::$rules2);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Section::find($id);
            $baner->section_name = Input::get('section_name');




            if (Input::hasFile('image')) {
                $image = Input::file('image');
                $filename = 'image1' . time() . "." . $image->getClientOriginalExtension();
                $path = public_path('assets/admin/img/products/' . $filename);
                Image::make($image->getRealPath())->save($path);
                $baner->image = 'assets/admin/img/products/' . $filename;
            }

            if (Input::hasFile('image2')) {
                $image = Input::file('image2');
                $filename = 'image2' . time() . "." . $image->getClientOriginalExtension();
                $path = public_path('assets/admin/img/products/' . $filename);
                Image::make($image->getRealPath())->save($path);
                $baner->image2 = 'assets/admin/img/products/' . $filename;
            }



            $baner->save();
            return Redirect::route('showsection')
                            ->with('yes', 'تم تعديل البنر بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = Section::find($id);
        if ($baner) {
            File::delete($baner->image);
            $baner->delete();
            return Redirect::to('section/index')
                            ->with('yes', 'تم حذف القسم  بنجاح');
        }
        return App::abort(404);
    }

}
