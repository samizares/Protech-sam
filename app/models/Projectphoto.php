<?php

class Projectphoto extends Eloquent {
	protected $fillable = array('name');
	public static $rules =array('name'=>'required|min:3');

	public function user() {
		return $this->belongsTo('User');
	}

	public function category() {
		return $this->belongsTo('Project','project_id');
	}

	public function getTimeagoAttribute()
    {
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }


}