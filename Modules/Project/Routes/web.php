<?php

Route::group(['prefix'=>'designer'],function (){
    Route::group(['prefix'=>'project'],function (){

        Route::get('/','ProjectController@designer_project');
        Route::get('/won','ProjectController@designer_won_project');

    });

    Route::group(['prefix'=>'proposal'],function (){
        Route::get('/','ProposalController@index');
    });

});


Route::group(['prefix'=>'owner'],function (){
    Route::group(['prefix'=>'project'],function (){

        Route::get('/','ProjectController@owner_project');
        Route::get('/new','ProjectController@owner_new_project');
        Route::get('/active','ProjectController@owner_active_project');

    });

    Route::group(['prefix'=>'proposal'],function (){
        Route::get('/','ProposalController@index');
    });

});

