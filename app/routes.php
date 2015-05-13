<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::controller('admin/projects/p', 'ProjectphotosController');
Route::controller('admin/cat/products', 'ProductcategoriesController');
Route::controller('admin/projects', 'ProjectsController');
Route::controller('admin/products', 'ProductsController');

//Route::get('admin/signin', 'UsersController@getSignin');
Route::get('/', array('uses'=>'HomeController@getIndex'));
Route::controller('admin', 'UsersController');

Route::controller('/', 'HomeController');

Route::get('download/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $file_path = storage_path() .'/file/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
});

/*  Route::post('contact', array('before' => 'csrf', function()
{

        // 1) Get all user's input
        $input = Input::all();

        // 2) Define validation rules
        $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ];

        // 3) Apply the validator
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
        // 4) Set the content to an array of validation error messages
        $content = [ 'errors' => $validator->messages()->all() ];
        } else {

        // 5) Send an HTML email or save the message in DB here
        $content = [ 'status' => 'ok'];
        }

        // 6) Form a JSON response and send it while having HTTP status 200
        return Response::json($content, 200);
       }
       ));
