<?php

class ProductcategoriesController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function getIndex() {
		return View::make('cat.product')
			->with('prodcat', Productcategory::all());
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), Productcategory::$rules);

		if ($validator->passes()) {
			$prodcat = new Productcategory;
			$prodcat->name = Input::get('name');
			$prodcat->title = Input::get('title');
			$prodcat->save();

			return Redirect::to('admin/cat/products/index')
				->with('message', 'Product Category Created');
		}

		return Redirect::to('admin/cat/products/index')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function postDestroy() {
		$prodcat = Productcategory::find(Input::get('id'));

		if ($prodcat) {
			$prodcat->delete();
			return Redirect::to('admin/cat/products/index')
				->with('message', 'Product Category Deleted');
		}

		return Redirect::to('admin/cat/products/index')
			->with('message', 'Something went wrong, please try again');
	}
}