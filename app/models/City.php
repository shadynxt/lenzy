<?php

Class City extends Eloquent {

    protected $fillable = array('city_name' , 'country_id');
    protected $table = 'city';
    public static $rules = array(
        'city_name' => 'required|min:3',
        'country_id' => 'required',
    );


}

?>
