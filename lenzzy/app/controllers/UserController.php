<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author fouad
 */
class UserController extends BaseController {

    public function getIndex() {
        $user = User::all();
        return View::make('admin.users.index')
                        ->with('u', $user);
    }

    public function getAdd() {
        return View::make('admin.users.add');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->passes()) {
            $user = new User;
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->age = Input::get('age');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->admin = Input::get('admin');
            $user->active = 1;
            $user->save();

            return Redirect::route('adduser')
                            ->with('yes', 'تم  اضافه العضو بنجاح ');
        }
        return Redirect::route('adduser')
                        ->with('no', 'لقد حدث خطاء في  اضافه  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getEdit($id) {
        $ed = User::find($id);
        return View::make('admin.users.edit')
                        ->with('u', $ed);
    }

    public function postUpdatedata($id) {
        $validator = Validator::make(Input::all(), User::$rules2);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->age = Input::get('age');
            $user->email = Input::get('email');
            $user->telephone = Input::get('telephone');
            $user->save();

            return Redirect::route('showuser')
                            ->with('yes', 'تم  تعديل  العضو بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function postUpdatepass($id) {
        $validator = Validator::make(Input::all(), User::$rules3);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::route('showuser')
                            ->with('yes', 'تم  تعديل  كلمه السر  بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function postUpdateactive($id) {
        $validator = Validator::make(Input::all(), User::$rules4);
        if ($validator->passes()) {
            $user = User::find($id);
            $user->admin = Input::get('admin');
            $user->active = Input::get('active');
            $user->save();

            return Redirect::route('showuser')
                            ->with('yes', 'تم  تعديل  البيانات    بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function postSearch() {
        return View::make('admin.users.search')
                        ->with('u', User::search());
    }

    public function getDelete($id) {
        $dell = User::find($id);
        if ($dell) {
            $dell->delete();
            return Redirect::route('showuser')
                            ->with('yes', 'تم حذف العضو بنجاح ');
        }
        return App::abort(404);
    }

    /* start login log out */

    public function getLogin() {
        return View::make('admin.users.login');
    }

    public function postLogin() {
        if (Auth::attempt(array('first_name' => Input::get('first_name'), 'password' => Input::get('password')))) {
            return Redirect::route('dashboard-admin')->with('yes', 'تم تسجيل الدخول بنجاح ');
        }

        return Redirect::back()->with('no', 'كلمه المستخدم / كلمه السر غير صحيح ');
    }

    public function getLogout() {

        Auth::logout();
        return Redirect::to('users/login')->with('no', 'تم تسجيل الخروج بنجاح ');
    }

    public function postSitelogin() {
        if (Auth::attempt(array('first_name' => Input::get('first_name'), 'password' => Input::get('password')))) {
            return Redirect::to('site/index')->with('yes', 'تم تسجيل الدخول بنجاح ');
        }

        return Redirect::back()->with('no', 'كلمه المستخدم / كلمه السر غير صحيح ');
    }

    public function getSitelogout() {

        Auth::logout();
        return Redirect::to('site/index')->with('no', 'تم تسجيل الخروج بنجاح ');
    }

}
