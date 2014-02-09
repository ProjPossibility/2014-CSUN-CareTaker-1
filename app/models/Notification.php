<?php

class Notification extends Eloquent {

	protected $fillable = array();

	public function severity()
	{
		return $this->belongsTo('Severity', 'severity_id');
	}

}