<?php

class MedicationList extends Eloquent {

	protected $guarded = array();
	protected $table = 'medication_list';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('');

	public function medications()
	{
		return $this->hasMany('Medication', 'medlist_id');
	}
	
}