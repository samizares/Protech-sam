<?php

class ProjectphotosController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('admin');
	}

	public function getIndex() {
		$projcats = array();

		foreach(Project::all() as $category) {
			$projcats[$category->id] = $category->name;
		}

		return View::make('projects.index')
			->with('projects', Projectphoto::all())
			->with('projcats', $projcats);
	}


	public function getNewprojectphoto() {
		$projcats =array();

		foreach(Project::all() as $category) {
			$projcats[$category->id] = $category->name;
		}
		return View::make('projects.newprojectphoto')
			->with('project', Project::all())
			->with('projcats', $projcats);
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), Projectphoto::$rules);

		if ($validator->passes()) {
			$photo = new Projectphoto;
			$photo->project_id = Input::get('project_id');
			$photo->name = Input::get('name');
			$photo->description = Input::get('description');

			$image = Input::file('image');
			$filename = date('Y-m-d').$image->getClientOriginalName();
			$path = public_path('images/projects/');
			//dd($path);
			//dd(is_writable($path));
			//dd(is_writable($path . $filename));
			Image::make($image->getRealPath())->resize(400, 400)->save($path.$filename);
			$photo->image = 'images/projects/'.$filename;

			$photo->user()->associate(Auth::user());

			$photo->save();

			return Redirect::to('admin/projects/p/index')
				->with('message', 'New Photo Added to Project');
		}

		return Redirect::back()
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

    public function getEdit() {
    	$photo = Projectphoto::find(Input::get('id'));
    	$projcat =array();

    	if ($photo) {
    		$photoName=$photo->category->name;
			$photoId =$photo->category->id;
			$projcat[$photoId]= $photoName;

			return View::make('projects.edit')
			->with('photo', $photo)
			->with('projcat', $projcat);

    	}
    	return Redirect::to('admin/projects/p/index')
			->with('message', 'Something went wrong, please try again');


    }

    public function postEdit() {
    	$validator = Validator::make(Input::all(), Projectphoto::$rules);

		if ($validator->passes()) {
    	$photo = Projectphoto::find(Input::get('id'));
    	$photo->name = Input::get('name');
			$photo->description = Input::get('description');

			$image = Input::file('image');
			$filename = date('Y-m-d').$image->getClientOriginalName();
			$path = public_path('images/projects/');
			//dd($path);
			//dd(is_writable($path));
			//dd(is_writable($path . $filename));
			Image::make($image->getRealPath())->resize(400, 400)->save($path.$filename);
			$photo->image = 'images/projects/'.$filename;

			$photo->user()->associate(Auth::user());

			$photo->save();

			return Redirect::to('admin/projects/p/index')
				->with('message', 'New Photo Added to Project');
		}

		return Redirect::back()
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();

    }

    public function postDestroy() {
		$photo = Projectphoto::find(Input::get('id'));

		if ($photo) {
			File::delete('public/'.$photo->image);
			$photo->delete();
			return Redirect::to('admin/projects/p/index')
				->with('message', 'Project photo Deleted');
		}

		return Redirect::to('admin/projects/p/index')
			->with('message', 'Something went wrong, please try again');
	}
}