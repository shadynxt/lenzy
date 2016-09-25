<?php

Class Mod extends Eloquent {

    protected $fillable = array('mod_name');
    protected $table = 'mod';
    public static $rules = array(
        'mod_name' => 'required|min:3',
        'make_id' => 'required',
    );


}

?>
