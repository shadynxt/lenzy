<?php

Class Contactus extends Eloquent {

    protected $fillable = array('contactus_name');
    protected $table = 'contactus';
    public static $rules = array(
        'contactus_name' => 'required|min:3',
        'contactus_email' => 'required|email|min:3',

    );

}

?>
