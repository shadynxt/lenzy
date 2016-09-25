<?php

Class Report extends Eloquent {

    protected $fillable = array('report_comment');
    protected $table = 'report';
    public static $rules = array(
        'report_comment' => 'required|min:3',
    );


}

?>
