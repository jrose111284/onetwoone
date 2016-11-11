<?php
use App\User;
use App\address;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// creates a address inside the address table with the same id as the user from the user table
Route::get('/insert', function () {

    // looking for user id 1
    $user = User::findOrFail(1);

    //saving the address as a var
    $address = new Address(['address_name'=> '123 southampton road']);

    //putting the address function and saving the address that was created
    $user->address()->save($address);

});