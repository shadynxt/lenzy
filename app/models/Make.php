<?php

Class Make extends Eloquent {

    protected $fillable = array('make_name');
    protected $table = 'make';
    public static $rules = array(
        'make_name' => 'required|min:3',
        'image' => 'required',
    );
    public static $rules2 = array(
        'make_name' => 'required|min:3',
        'image' => '',
    );

}

?>
