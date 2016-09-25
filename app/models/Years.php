<?php

Class Years extends Eloquent {

    protected $fillable = array('year_num');
    protected $table = 'years';
    public static $rules = array(
        'year_num' => 'required|min:2',
    );


}

?>
