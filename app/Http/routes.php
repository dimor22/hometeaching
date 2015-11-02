<?php

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
    $user = App\Member::find(1);
	$notes = $user->notes()->get();
	$comp = $user->companionship()->get();
	$visits = $user->visits()->get();
	dd($user, $notes, $comp, $visits);
    //return view('welcome', compact('users'));
});


//Route::get('members', 'MemberController@index');
//Route::get('member/create', 'MemberController@create');
//Route::get('member/{id}', 'MemberController@show');
//Route::get('member/edit/{id}', 'MemberController@edit');
//Route::post('member', 'MemberController@store');
//Route::post('member/update', 'MemberController@update');
//Route::delete('member', 'MemberController@deleteMember');

//Route::get('companionships', 'CompanionshipController@index');
//Route::get('companionship/addFamily/{id}', 'CompanionshipController@addFamily');
//Route::get('companionship/create/{id}', 'CompanionshipController@create');
//Route::get('companionship/{id}', 'CompanionshipController@show');
//Route::post('companionships', 'CompanionshipController@store');
//Route::post('companionships/addfamily', 'CompanionshipController@storeFamily');
//Route::delete('companionship', 'CompanionshipController@deleteMember');