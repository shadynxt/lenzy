<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class OrderController extends BaseController {

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
        return View::make('admin.order.index')
                        ->with('orders', Order::orderBy('id' , 'desc')->get());
    }

    public function getShow($id) {
        return View::make('admin.order.edit')
                        ->with('order', Order::where('id', '=', $id)->first())
                        ->with('u', Orderproducts::where('order_id', '=', $id)->get())
                        ->with('user', User::where('id', '=', $id)->get());
    }

    public function getDelete($id) {
        $baner = Order::find($id);
        if ($baner) {
            $baner->delete();
            return Redirect::to('order/index')
                            ->with('yes', 'تم حذف الطلب بنجاح');
        }
        return Redirect::to('order/index')
                        ->with('no', 'لقد حدث خطاء يرجا المحاوله مره اخري ');
    }

    public function getActive($id) {
        if ($id) {
            $user = Order::find($id);
            $user->finish = 1;
            $user->save();

            return Redirect::to('order/index')
                            ->with('yes', 'تم  تعديل  البيانات    بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function getDisactive($id) {
        if ($id) {
            $user = Order::find($id);
            $user->finish = 0;
            $user->save();

            return Redirect::to('order/index')
                            ->with('yes', 'تم  تعديل  البيانات    بنجاح ');
        }
        return Redirect::back()
                        ->with('no', 'لقد حدث خطاء في  تعديل  البيانات برجاء اتباع التعليمات ')
                        ->withErrors($validator)
                        ->withInput();
    }

}
