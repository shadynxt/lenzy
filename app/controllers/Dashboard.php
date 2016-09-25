<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author fouad
 */
class Dashboard extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {


        $unactivecount = DB::table('ads')
                ->count();
        $activecount = DB::table('users')
                ->count();
        $countrycount = DB::table('baner')->count();
        $citycount = DB::table('newsletter')->count();

        return View::make('admin.main')
                        ->with('unuser', $unactivecount)
                        ->with('auser', $activecount)
                        ->with('con', $countrycount)
                        ->with('cit', $citycount);
        // return App::abort(404);
    }

}
