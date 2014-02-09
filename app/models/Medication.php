<?php

class Medication extends Eloquent {

	protected $guarded = array();

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('');


	public function user() {
	
		return $this->belongsTo('User');
	}

	public function medlist_info() {
	
		return $this->belongsTo('MedicationList', 'medlist_id');
	}
	

}