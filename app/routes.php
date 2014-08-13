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



/*Route::get('/', function()
{
	
	//echo "hello";
	return View::make('register');
});

*/

Route::get('/register', function()
{
    //return 'Hello World1111';
	return View::make('register');
});

Route::post('/register_action', function()
{
	
	    //echo "dfds";exit;
        $obj = new RegisterController() ;
		
		//echo "<pre>";print_r($_POST);exit;
        return $obj->store($_POST);
});

