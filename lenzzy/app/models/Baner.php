<?php

class Baner extends Eloquent {

    protected $fillable = array('baner_name', 'image');
    protected $table = "baner";
    public static $rules = array(
        'baner_name' => 'required|min:3',
        'image' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
    );
    public static $rules2 = array(
        'baner_name' => 'required|min:3',
        'image' => 'mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
    );

}
