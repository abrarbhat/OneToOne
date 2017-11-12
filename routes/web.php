<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Addresses;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert',function (){

    $user = User::findOrFail(1);
    $add = new Addresses(['name'=>'nawabazar srinagar']);
    $user->address()->save($add);
//return $adds = Addresses::findOrFail(1);
//return $user;
//return $adds;
});

//
//Route::get('/insert1',function(){
//
//    $add  = Addresses::findOrFail(1);//return $add;
//    $user = new User(['name'=>'neha','email'=>'neha.com','password'=>'12234']);
//    $add->user()->save($user);
//    return $add;
//
//
//});


Route::get('/update',function (){

    $add = Addresses::whereUserId(3)->first();
    $add->name = "asdklhklasjkldjkljasdkljasdlzainaasdasdasghdhkasjkd kadalsrinagar";
    $add->save();



});

Route::get('/select',function(){

    $usr=User::findOrFail(1);
    echo $usr->address->name;//->id;//->id;

    $add =Addresses::findOrFail(1);
    echo $add->user->email;



});



Route::get('/delete',function(){


    $usr=User::findOrFail(1);
    $usr->address()->delete();
    return "done";
});