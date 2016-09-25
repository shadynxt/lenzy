<?php

Class Follow extends Eloquent {

    protected $fillable = array('make_id' , 'model_id');
    protected $table = 'follow';
    public static $rules = array(
        'make_id' => '',
        'model_id' => '',
    );


}

?>
