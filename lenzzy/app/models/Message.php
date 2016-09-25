<?php

Class Message extends Eloquent {

    protected $fillable = array('message_text', 'message_title');
    protected $table = 'message';
    public static $rules = array(
        'message_text' => 'required|min:3',
        'message_title' => 'required|min:3',
    );
    public static $rules2 = array(
        'message_text' => 'required|min:3',
    );

}

?>
