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
class BankController extends BaseController {

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
        return View::make('admin.bank.index')
                        ->with('u', Bank::all());
    }

    /*
      admin view add
     */

    public function getAdd() {
        return View::make('admin.bank.add');
    }

    /*
      admin function create
     */

    public function postCreate() {

        $validator = Validator::make(Input::all(), Bank::$rules);
        if ($validator->passes()) {
            $baner = new Bank;
            $baner->bank_name = Input::get('bank_name');
            $baner->bank_num = Input::get('bank_num');
            $baner->bank_ipan = Input::get('bank_ipan');

            $file = Input::file('image');
            $destinationPath = 'assets/admin/img/products/';
            $filename = 'sarosa' . "-" . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $baner->image = 'assets/admin/img/products/' . $filename;
            $baner->save();
            return Redirect::to('bank/index')
                            ->with('yes', 'تم اضافه البيانات بنجاح');
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
        $baner = Bank::find($id);
        return View::make('admin.bank.edit')
                        ->with('u', $baner);
    }

    /*
      admin edit function
     */

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Bank::$rules2);
        if ($validator->passes()) {

            //    no  reqired for image    only

            $baner = Bank::find($id);
            $baner->bank_name = Input::get('bank_name');
            $baner->bank_num = Input::get('bank_num');
            $baner->bank_ipan = Input::get('bank_ipan');

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
            return Redirect::to('bank/index')
                            ->with('yes', 'تم تعديل البيانات  بنجاح');
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
        $baner = Bank::find($id);
        if ($baner) {
            File::delete($baner->image);
            $baner->delete();
            return Redirect::to('bank/index')
                            ->with('yes', 'تم حذف البيانات بنجاح');
        }
        return Redirect::to('admin/baner/index')
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري ');
    }

}
