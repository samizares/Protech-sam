<?php

class Product extends Eloquent {

	protected $fillable = array('prodcat_id', 'name', 'description', 'price', 'user_id', 'image');

	public static $rules = array(
		'prodcat_id'=>'required|integer',
		'name'=>'required|min:2',
		'description'=>'min:10',
		'price'=>'numeric',
		'image'=>'required|image|mimes:jpeg,jpg,bmp,png,gif'
	);

	public function category() {
		return $this->belongsTo('Productcategory', 'prodcat_id');
	}

	public function user() {
		return $this->belongsTo('User');
	}

	public function getTimeagoAttribute()
    {
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }

}