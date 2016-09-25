<?php

class BaseController extends Controller {

    public function __construct() {


        $this->beforeFilter(function () {
            // $main = DB::table('mainsettings')->last();
            $main = DB::table('mainsettings')->orderBy('created_at', 'desc')->first();
            View::share('main', $main);
        });

        $this->beforeFilter(function () {
            $makes = array();
            foreach (Make::all() as $mkk) {
                $makes[$mkk->id] = $mkk->make_name;
            }
            View::share('makee', $makes);
        });

        $this->beforeFilter(function () {
            $makes = array();
            foreach (Years::orderBy('id', 'desc')->get() as $mkk) {
                $makes[$mkk->id] = $mkk->year_num;
            }
            View::share('year', $makes);
        });


        $this->beforeFilter(function () {
            $cat = Section::all();
            View::share('sec', $cat);
        });

        $this->beforeFilter(function () {
            $cat = Baner::all();
            View::share('baner', $cat);
        });

        $this->beforeFilter(function () {
            $make2 = Make::all();
            View::share('make2', $make2);
        });

        $this->beforeFilter(function () {
            $catr = Years::orderBy('created_at', 'desc')->get();
            View::share('years', $catr);
        });
        $this->beforeFilter(function () {
            $cats = City::orderBy('id', 'asc')->take(20)->get();
            View::share('x', $cats);
        });

        $this->beforeFilter(function () {
            $catsuu = City::all();
            View::share('cityall', $catsuu);
        });
        $this->beforeFilter(function () {
            $make = make::orderBy('id', 'ASC')->take(32)->get();
            View::share('m', $make);
        });

        $this->beforeFilter(function () {

            $makesx = array();
            foreach (City::all() as $mkke) {
                $makesx[$mkke->id] = $mkke->city_name;
            }
            View::share('cit', $makesx);
        });
        if (Auth::check()) {
            $this->beforeFilter(function () {
                $messnum = DB::table('message')
                        ->where('message_to', '=', Auth::User()->id)
                        ->where('see', '=', 0)
                        ->count();
                View::share('messnum', $messnum);
            });
            $this->beforeFilter(function () {
                $messnume = DB::table('ads')
                        ->where('user_id', '=', Auth::User()->id)
                        ->count();
                View::share('countad', $messnume);
            });
            $this->beforeFilter(function () {
                $messnumx = DB::table('favorit')
                        ->where('user_id', '=', Auth::User()->id)
                        ->count();
                View::share('countfavad', $messnumx);
            });
            $this->beforeFilter(function () {
                $messnumx = DB::table('note')
                        ->where('user_id_to', '=', Auth::User()->id)
                        ->where('see', '=', 0)
                        ->count();
                View::share('countnote', $messnumx);
            });
        }
    }

    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}
