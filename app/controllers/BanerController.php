<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BanerController
 *
 * @author fouad
 */
class BanerController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
        // $this->beforeFilter('csrf',array('on'=>'post'));
    }

    /*
      admin index
     */

    public function getIndex() {
        return View::make('admin.baner.index')
                        ->with('u', Baner::all());
    }

    /*
      admin view add
     */

    public function getAdd() {
        return View::make('admin.baner.add');
    }

    /*
      admin function create
     */

    public function postCreate() {

        $validator = Validator::make(Input::all(), Baner::$rules);
        if ($validator->passes()) {
            $baner = new Baner;
            $baner->baner_name = Input::get('baner_name');
            $baner->baner_link = Input::get('baner_link');
            $baner->type = Input::get('type');

            $file = Input::file('image');
            $destinationPath = 'assets/admin/img/products/';
            $filename = 'sarosa' . "-" . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $baner->image = 'assets/admin/img/products/' . $filename;
            $baner->save();
            return Redirect::to('baner/index')
                            ->with('yes', 'تم رفع البنر بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    /*
      admin view edit
     */

    public function getEdit($id) {
        $baner = Baner::find($id);
        return View::make('admin.baner.edit')
                        ->with('u', $baner);
    }

    /*
      admin edit function
     */

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Baner::$rules2);
        if ($validator->passes()) {

            //    no  reqired for image    only

            $baner = Baner::find($id);
            $baner->baner_name = Input::get('baner_name');
            $baner->baner_link = Input::get('baner_link');
            $baner->type = Input::get('type');


            $image = Input::file('image');
            if ($image) {
                $filename = time('Y-d') . "." . $image->getClientOriginalExtension();
                $path = public_path('assets/admin/img/products/' . $filename);
                Image::make($image->getRealPath())->resize(468, 249)->save($path);

                ##########################

                /*
                  check if that image there or no
                 */
                if ($baner->image and file_exists($baner->image)) {

                    File::delete($baner->image);
                }
                $baner->image = 'assets/admin/img/products/' . $filename;
                ############################
            }
            $baner->save();
            return Redirect::to('baner/index')
                            ->with('yes', 'تم تعديل البنر بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    /*
      admin delete function with delete image from server
     */

    public function getDelete($id) {
        $baner = Baner::find($id);
        if ($baner) {
            File::delete($baner->image);
            $baner->delete();
            return Redirect::to('baner/index')
                            ->with('yes', 'تم حذف البنر بنجاح');
        }
        return Redirect::to('admin/baner/index')
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري ');
    }

}
