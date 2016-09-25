<?php

class Note extends Eloquent {

    protected $fillable = array('user_id_to', 'user_id_from');
    protected $table = "note";
    public static $rules = array(
        'user_id_to' => '',
        'user_id_from' => ''
    );


}
