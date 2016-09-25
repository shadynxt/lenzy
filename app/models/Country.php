<?php

Class Country extends Eloquent {

    protected $fillable = array('country_name');
    protected $table = 'country';
    public static $rules = array(
        'country_name' => 'required|min:3',
    );


}

?>
