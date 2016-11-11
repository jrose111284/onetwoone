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
    $address = new Address(['address_name'=> '12345 southampton road']);

    //putting the address function and saving the address that was created
    $user->address()->save($address);

});
//updates the address table
Route::get('/update', function () {

    //updates the database of address were the user id is 1, so if you have more then one will update them all
    $address = Address::where('user_id', 1 )->first(); // first will apply to the fir
    $address->address_name = '123 my road';

    $address->save();
});
git add .
//reads the database from the user with the same id as the address id
Route::get('/read', function () {
    $user = User::findOrFail(1);

   echo $user->address->created_at;
});

Route::get('/delete', function(){
   $user = User::findOrFail(1);

    $user->address()->delete();
});