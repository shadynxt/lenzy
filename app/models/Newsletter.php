<?php

Class Newsletter extends Eloquent {

    protected $fillable = array('newsletter_email');
    protected $table = 'newsletter';
    public static $rules1 = array(
        'newsletter_email' => 'required|email',
    );
    public static $rules2 = array(
        'newsletter_phone' => 'required|Numeric',
    );

}

?>
