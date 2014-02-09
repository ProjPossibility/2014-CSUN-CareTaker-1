<?php

class Appointment extends Eloquent {

	protected $fillable = array('name', 'location');

	protected $guarded = array('id');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getCreatedAtAttribute($value) {
		return date('M j, Y g:i A', strtotime($value));
	}

}