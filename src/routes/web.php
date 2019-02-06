<?php

use Illuminate\Http\Request;
$namespace = "Lameck\Dracula\Hosts\Http\Controllers";

Route::group(['namespace'=>$namespace,'prefix'=>'dracula','middleware' => 'web'],  

function(){

    Route::group(['middleware' => 'auth'],  
    function(){

        Route::get('/hosts','DraculaHostsController@index')->name('dracula.hosts.index');
        Route::get('/hosts/view/{id}','DraculaHostsController@view')->name('dracula.hosts.view');
        
    });

    

});