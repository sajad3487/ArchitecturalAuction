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
        Route::get('/','ProjectController@all_owner_project');
        Route::get('/{project_id}/invoice','ProjectController@view_project_invoice');
        Route::get('/{project_id}/proposal','ProjectController@view_project_proposal');
        Route::get('/new','ProjectController@owner_new_project');
        Route::post('store','ProjectController@owner_store_project');
        Route::get('/active','ProjectController@owner_active_project');
        Route::get('/{project_id}/pay','ProjectController@owner_pay_project');
        Route::get('/{project_id}/view','ProjectController@owner_view_project');
        Route::get('/{project_id}/edit','ProjectController@owner_edit_project');
    });



    Route::group(['prefix'=>'proposal'],function (){
        Route::get('/','ProposalController@index');
        Route::get('/{project_id}/view','ProposalController@show');
    });

});

