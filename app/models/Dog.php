<?php

class Dog extends Eloquent {
    protected $fillable = array('name');

    public function user()
    {
	return $this->belongsTo('User');
    }

}