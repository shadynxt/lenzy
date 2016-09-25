<?php

Class Section extends Eloquent {

    protected $fillable = array('section_name', 'image');
    protected $table = 'section';
    public static $rules = array(
        'section_name' => 'required|min:3',
        'image' => 'required',
    );
    public static $rules2 = array(
        'section_name' => 'required|min:3',
        'image' => '',
    );

}

?>
