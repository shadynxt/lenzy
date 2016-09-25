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
class CityController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {
        //$model = new Product;
        //$products = $model->join('categories', 'products.category_id', '=', 'catetgories.id')->select('products.*', 'categories.name')->get();
        $model = new City;
        $products = $model->join('country', 'city.country_id', '=', 'country.id')->select('city.*', 'country.country_name')->get();

        return View::make('admin.city.index')
                        ->with('u', $products);
    }

    public function getAdd() {


        $mod = array();

        foreach (Country::all() as $mods) {
            $mod[$mods->id] = $mods->country_name;
        }
        return View::make('admin.city.add')
                        ->with('ss', $mod);
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), City::$rules);

        if ($validator->passes()) {

            $baner = new City;
            $baner->city_name = Input::get('city_name');
            $baner->country_id = Input::get('country_id');
            $baner->save();
            return Redirect::route('showcity')
                            ->with('yes', 'تم اضافه المدينه    بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في اضافه البيانات رجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $u = City::find($id);

        $mod = array();

        foreach (Country::all() as $mods) {
            $mod[$mods->id] = $mods->country_name;
        }

        return View::make('admin.city.edit')
                        ->with('u', $u)
                        ->with('ss', $mod);
    }

    public function postUpdate($id) {
        $validator = Validator::make(Input::all(), City::$rules);
        if ($validator->passes()) {
            //    no  reqired for image    only
            $baner = City::find($id);
            $baner->city_name = Input::get('city_name');
            $baner->country_id = Input::get('country_id');
            $baner->save();
            return Redirect::route('showcity')
                            ->with('yes', 'تم تعديل المدينه    بنجاح');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDelete($id) {
        $baner = City::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::route('showcity')
                            ->with('yes', 'تم حذف  المدينه   بنجاح');
        }
        return App::abort(404);
    }

}
