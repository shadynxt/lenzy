<?php

class Point extends Eloquent {

    protected $fillable = array('money', 'bank');
    protected $table = "point";
    public static $rules = array(
        'money' => '',
        'bank' => ''
    );


}
