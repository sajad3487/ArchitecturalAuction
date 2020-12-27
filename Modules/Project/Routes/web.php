<?php




Route::group(['prefix'=>'proposal'],function (){
    Route::get('/','ProposalController@index');
});

Route::group(['prefix'=>'designer'],function (){
    Route::group(['prefix'=>'project'],function (){
        Route::get('/','ProjectController@designer_project');
        Route::get('/won','ProjectController@designer_won_project');
    });
});


