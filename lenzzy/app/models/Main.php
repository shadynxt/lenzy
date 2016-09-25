<?php

Class Main extends Eloquent {

    protected $fillable = array('site_title', 'site_desc', 'site_comment', 'site_fb', 'site_twiter', 'site_google', 'site_email', 'site_telephone', 'message', 'close');
    protected $table = 'mainsettings';
    public static $rules = array(
        'site_title' => 'required|min:3',
        'site_desc' => 'required|min:3',
        'site_comment' => 'required|min:3',
        'site_fb' => 'required|min:3',
        'site_twiter' => 'required|min:3',
        'site_instgram' => 'required|min:3',
        'site_youtube' => '',
        'site_email' => 'required|min:3|email',
        'site_telephone' => 'required|between:10,12',
        'site_about' => '',
        'site_condition' => 'required|min:5',
        'close' => 'integer',
        'message' => 'required|min:3'
    );

}

?>
