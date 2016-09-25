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
class PointController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.point.index')
                        ->with('u', Point::orderBy('id', 'desc')->get());
    }

    public function getShow($id) {
        $opject = Point::find($id);
        return View::make('admin.point.edit')
                        ->with('u', $opject);
    }

    public function postUpdate($id) {

        $userbalance = User::where('id', $id)->first();
        $monye = $userbalance->money + 100;

        $opject = User::find($id);
        $opject->money = $monye;
        $opject->save();
        return Redirect::to('point/index')
                        ->with('yes', 'تم اضافه النقاط     بنجاح');
    }

    public function getDelete($id) {
        $baner = Point::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::to('point/index')
                            ->with('yes', 'تم حذف  الطلب   بنجاح');
        }
        return App::abort(404);
    }

}
