<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Collection;

class User extends Eloquent implements UserInterface, RemindableInterface {

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
	protected $hidden = array('password');

	protected $guarded = array('id');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * User has many tweets.
	 */
	public function tweets()
    {
        return $this->hasMany('Tweet');
    }

    /**
     * User has many followers.
     */
    public function followers()
    {
    	return $this->belongsToMany('User', 'followers', 'user_id', 'follower_id');
    }

    /**
     * User has many followings.
     */
    public function followings()
    {
    	return $this->belongsToMany('User', 'followers', 'follower_id', 'user_id');
    }



    
}