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
class NewsletterController extends BaseController {

    public function __construct() {
        //parent::__construct();
        // $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('admin');
        $this->beforeFilter('admin2');
    }

    public function getIndex() {

        return View::make('admin.newsletter.index')
                        ->with('u', Newsletter::all());
    }

    public function getPhone() {

        return View::make('admin.newsletter.phone')
                        ->with('u', Newsletter::all());
    }

    public function getDelete($id) {

        $nn = Newsletter::find($id);
        if ($nn) {
            $nn->delete();
            return Redirect::to('letter/index')
                            ->with('yes', 'تم مسح البريد  بنجاح ');
        }
    }
    
    public function getAdd(){
        
        return View::make('admin.newsletter.add');
    }
    
    
    public function postCreate(){
        
        $name = Input::get('name');
        $desc = Input::get('desc');
        
        foreach(Newsletter::all() as $n){
            
             $x = mail( $n->newsletter_email ,$name,$desc);
        }
        
        if($x){
            return Redirect::to('letter/index')
                    ->with('yes' , 'تم ارسال الرسائل بنجاح');
        }
        
       
        
    }

}
