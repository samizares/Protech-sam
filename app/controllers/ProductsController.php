<?php

class ProductsController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('admin');
	}

	public function getIndex() {
		$prodcats = array();

		foreach(Productcategory::all() as $category) {
			$prodcats[$category->id] = $category->name;
		}

		return View::make('products.index')
			->with('products', Product::all())
			->with('prodcats', $prodcats);
	}


	public function getNewproduct() {
		$prodcats =array();

		foreach(Productcategory::all() as $category) {
			$prodcats[$category->id] = $category->name;
		}
		return View::make('products.newproduct')
			->with('product', Product::all())
			->with('prodcats', $prodcats);
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), Product::$rules);

		if ($validator->passes()) {
			$product = new Product;
			$product->prodcat_id = Input::get('prodcat_id');
			$product->name = Input::get('name');
			$product->description = Input::get('description');
			$product->price = Input::get('price');

			$image = Input::file('image');
			$filename = date('Y-m-d').$image->getClientOriginalName();
			$path = public_path('images/products/');
			//dd($path);
			//dd(is_writable($path));
			//dd(is_writable($path . $filename));
			Image::make($image->getRealPath())->resize(400, 400)->save($path.$filename);
			$product->image = 'images/products/'.$filename;

			$product->user()->associate(Auth::user());

			$product->save();

			return Redirect::to('admin/products/index')
				->with('message', 'Product Created');
		}

		return Redirect::to('admin/products/index')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function postDestroy() {
		$product = Product::find(Input::get('id'));

		if ($product) {
			File::delete('public/'.$product->image);
			$product->delete();
			return Redirect::to('admin/products/index')
				->with('message', 'Product Deleted');
		}

		return Redirect::to('admin/products/index')
			->with('message', 'Something went wrong, please try again');
	}
}