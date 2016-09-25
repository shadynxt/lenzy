<?php

Class Report2 extends Eloquent {

    protected $fillable = array('report_comment');
    protected $table = 'report2';
    public static $rules = array(
        'report_comment' => 'required|min:3',
    );


}

?>
