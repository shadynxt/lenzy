<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $fillable = array('first_name', 'last_name', 'email', 'telephone', 'age');
    public static $rules = array(
        'first_name' => 'required|min:2|alpha',
        'last_name' => 'required|min:2|alpha',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'telephone' => 'required',
        'age' => 'required|integer',
        'admin' => 'required|integer'
    );
    public static $rules2 = array(
        'first_name' => 'required|min:2|alpha',
        'last_name' => 'required|min:2|alpha',
        'email' => 'required|email',
        'telephone' => 'required',
        'age' => 'required|integer',
    );
    public static $rules3 = array(
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
    );
    public static $rules4 = array(
        'admin' => 'required|integer',
        'active' => 'required',
    );
    public static $rules5 = array(
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
    );
    public static $rules8 = array(
        'first_name' => 'required|min:2|alpha',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'telephone' => '',
    );
    public static $rules9 = array(
        'email' => 'email|unique:users',
    );
    public static $rules10 = array(
        'email' => 'email|required',
        'first_name' => 'required',
        'telephone' => 'required',
    );

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public static function search() {
        $search = htmlentities(Input::get('search'));
        $searchid = User::where('first_name', 'LIKE', '%' . $search . '%')
                ->orWhere('id', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'LIKE', '%' . $search . '%')
                ->get();
        return $searchid;
    }

}
