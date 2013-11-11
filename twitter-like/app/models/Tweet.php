<?php

class Tweet extends Eloquent {

	protected $guarded = array('id');
	
	/**
	 * Tweet has only one User.
	 */
    public function user()
    {
        return $this->belongsTo('User');
    }
}