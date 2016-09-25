<?php

Class Subsection extends Eloquent {

    protected $fillable = array('subsection_name');
    protected $table = 'subsection';
    public static $rules = array(
        'subsection_name' => 'required|min:3',
    );
    public static $rules2 = array(
        'subsection_name' => 'required|min:3',
    );

}

?>
