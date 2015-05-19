<?php

class Message extends Eloquent {

	protected $fillable = array( 'name', 'email', 'subject', 'message');

	public static $rules = array(
		'name'=>'required|min:5|max:100',
		'email'=>'required|email',
		'subject'=>'min:2|max:150',
		'content'=>'required|max:500'
	);



	public function getTimeagoAttribute()
    {
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }

}