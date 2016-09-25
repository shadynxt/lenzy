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
class MessageController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
        $this->beforeFilter('admin3');
    }

    public function getIndex() {
        return View::make('admin.mess.index')
                        ->with('u', Message::all());
    }

    public function getDelete($id) {
        $idd = Message::find($id);
        if ($idd) {
            $idd->delete();
            return Redirect::to('mess/index')
                            ->with('yes', 'تم مسح التعليق بنجاح ');
        } else {

            return View::make('errors.404');
        }
    }

    public function postSearchcomm() {
        return View::make('admin.comm.search')
                        ->with('u', Comm::searchcomm());
    }

    public function getReport() {
        $x = Report2::all();
        return View::make('admin.comm.report')
                        ->with('u', $x);
    }

    public function getDeletereportcomm($id) {

        $iddd = Report2::find($id);
        if ($iddd) {
            $iddd->delete();
            return Redirect::back()
                            ->with('yes', 'تم مسح التعليق المخالف بنجاح ');
        } else {


            return View::make('errors.404');
        }
    }

    public function getShow($id) {

        $xid = Message::find($id);

        return View::make('admin.mess.add')
                        ->with('r', $xid);
    }

}
