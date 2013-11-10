<?php

class Tweet extends Eloquent {

	/**
	 * Tweet has only one User.
	 */
    public function user()
    {
        return $this->belongsTo('User');
    }
}