<?php

class Notification extends Eloquent {

	protected $fillable = array(
      'title',
      'notification',
      'severity_id',
      'resources_type_id'
   );

	public function severity()
	{
		return $this->belongsTo('Severity', 'severity_id');
	}

	public function notificationtype()
	{
		return $this->belongsTo('Notificationtype', 'resources_type_id');
	}
}