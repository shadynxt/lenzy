<?php

Class Bank extends Eloquent {

    protected $fillable = array('bank_name', 'bank_ipan');
    protected $table = 'bank';
    public static $rules = array(
        'bank_name' => 'required|min:3',
        'bank_num' => 'required',
        'bank_ipan' => 'required',
        'image' => 'required',
    );
    public static $rules2 = array(
        'bank_name' => 'required|min:3',
        'bank_num' => 'required',
        'bank_ipan' => 'required',
        'image' => '',
    );

}

?>
