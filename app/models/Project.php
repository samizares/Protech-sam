<?php
class Project extends Eloquent {

	protected $fillable = array('name');

	public static $rules = array(
		'name'=>'required|min:3',
		'title'=>'required|min:3'

		);
	public function photos() {
		return $this->hasMany('Projectphoto','project_id');
	}
}