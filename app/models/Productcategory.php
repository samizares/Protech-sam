<?php
class Productcategory extends Eloquent {

	protected $table = 'productcategories';

	protected $fillable = array('name','title');

	public static $rules = array(
		'name'=>'required|min:3',
		'title'=>'required|min:3'

		);

	public function products() {
		return $this->hasMany('Product','prodcat_id');
	}
	
}