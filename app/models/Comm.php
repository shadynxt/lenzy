<?php

Class Comm extends Eloquent {

    protected $fillable = array('comment_text');
    protected $table = 'comment';
    public static $rules = array(
        'comment_text' => 'required|min:3',
    );

    public static function searchcomm() {
        $search = htmlentities(Input::get('search'));
        $searchid = Comm::where('comment_text', 'LIKE', '%' . $search . '%')
                ->orWhere('id', 'LIKE', '%' . $search . '%')
                ->get();
        return $searchid;
    }

}

?>
