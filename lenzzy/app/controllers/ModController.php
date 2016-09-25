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
class ModController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {
        //$model = new Product;
        //$products = $model->join('categories', 'products.category_id', '=', 'categories.id')->select('products.*', 'categories.name')->get();


        $model = new Mod;
        $products = $model->join('make', 'mod.make_id', '=', 'make.id')->select('mod.*', 'make.make_name')->get();

        return View::make('admin.mod.index')
                        ->with('u', $products);
    }

    public function getAdd() {


        $mod = array();

        foreach (Make::all() as $mods) {
            $mod[$mods->id] = $mods->make_name;
        }
        return View::make('admin.mod.add')
                        ->with('ss', $mod);
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), Mod::$rules);

        if ($validator->passes()) {

            $baner = new Mod;
            $baner->mod_name = Input::get('mod_name');
            $baner->make_id = Input::get('make_id');
            $baner->save();
            return Redirect::route('showmod')
                            ->with('yes', 'تم اضافه الموديل   بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $u = Mod::find($id);

        $mod = array();

        foreach (Make::all() as $mods) {
            $mod[$mods->id] = $mods->make_name;
        }

        return View::make('admin.mod.edit')
                        ->with('u', $u)
                        ->with('ss', $mod);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), Mod::$rules);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = Mod::find($id);
            $baner->mod_name = Input::get('mod_name');
            $baner->make_id = Input::get('make_id');
            $baner->save();
            return Redirect::route('showmod')
                            ->with('yes', 'تم تعديل الموديل   بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = Mod::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::route('showmod')
                            ->with('yes', 'تم حذف  الماركه  بنجاح');
        }
        return App::abort(404);
    }

    public function postModajax() {
        if (Input::get('make_id')) {
            $towns = Mod::where('make_id', '=', Input ::get('make_id'))->get()->toJson();
            return $towns;
        }
    }

    public function postModpr() {
        if (Input::get('id')) {
            $adsajax = Ads::where('id', '=', Input::get('id'))->first()->toJson();
            return $adsajax;
        }
    }

    //  func  mohmed saleh
    public function getJson($id) {
        $comment = Comm::where('comment_ads_id', '=', $id)
                        ->orderBy('id', 'DESC')
                        ->get()->toJson();
        return $comment;
    }

}
