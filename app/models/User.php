<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	protected $fillable = array('firstname', 'lastname', 'email');

	public static $rules = array(
		'firstname'=>'required|min:2|alpha',
		'lastname'=>'required|min:2|alpha',
		'email'=>'required|email|unique:users',
		'password'=>'required|alpha_num|between:8,12|confirmed',
		'password_confirmation'=>'required|alpha_num|between:8,12',
		'admin'=>'integer'
	);

	/**
     * Get the user's full name by concatenating the first and last names
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function products() {
		return $this->hasMany('Product');
	}

	public function photos() {
		return $this->hasMany('Projectphoto');
	}

}
