<?php

class ProjectsController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('admin');
	}

	public function getIndex() {
		return View::make('cat.project')
			->with('projcat', Project::all());
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), Project::$rules);

		if ($validator->passes()) {
			$projcat = new Project;
			$projcat->name = Input::get('name');
			$projcat->title = Input::get('title');
			$projcat->save();

			return Redirect::to('admin/projects/index')
				->with('message', 'New Project Created');
		}

		return Redirect::to('admin/projects/index')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function postDestroy() {
		$proj = Project::find(Input::get('id'));

		if ($proj) {
			$proj->delete();
			return Redirect::to('admin/projects/index')
				->with('message', 'Project Deleted');
		}

		return Redirect::to('admin/projects/index')
			->with('message', 'Something went wrong, please try again');
	}
}