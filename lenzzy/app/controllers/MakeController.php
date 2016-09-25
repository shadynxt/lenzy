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
class MakeController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.make.index')
                        ->with('u', Make::all());
    }

    public function getAdd() {
        return View::make('admin.make.add');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), Make::$rules);

        if ($validator->passes()) {

            $baner = new Make;
            $baner->make_name = Input::get('make_name');
            $image = Input::file('image');
            $filename = time('Y-d') . "." . $image->getClientOriginalExtension();
            $path = public_path('assets/admin/img/products/' . $filename);
            Image::make($image->getRealPath())->resize(468, 249)->save($path);
            $baner->image = 'assets/admin/img/products/' . $filename;
            $baner->save();
            return Redirect::route('showmake')
                            ->with('yes', 'تم اضافه الماركه  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $u = Make::find($id);

        return View::make('admin.make.edit')
                        ->with('u', $u);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Make::$rules2);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Make::find($id);
            $baner->make_name = Input::get('make_name');
            $image = Input::file('image');
            if ($image) {
                $filename = time('Y-d') . "." . $image->getClientOriginalExtension();
                $path = public_path('assets/admin/img/products/' . $filename);
                Image::make($image->getRealPath())->resize(468, 249)->save($path);

                ##########################
                if ($baner->image and file_exists($baner->image)) {

                    File::delete($baner->image);
                }
                $baner->image = 'assets/admin/img/products/' . $filename;
                ############################
            }
            $baner->save();
            return Redirect::route('showmake')
                            ->with('yes', 'تم تعديل الماركه  بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = Make::find($id);
        if ($baner) {
            File::delete($baner->image);
            $baner->delete();
            return Redirect::route('showmake')
                            ->with('yes', 'تم حذف  الماركه  بنجاح');
        }
        return App::abort(404);
    }

}
