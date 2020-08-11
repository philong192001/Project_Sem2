<?php  
 Route::prefix('users')->group(function () {
        Route::get('/',
            [
                'as'   => 'users.index',
                'uses' => 'Admin\UserController@index',
                'middleware'=>'can:user-list'
            ]);
        Route::get('/create',
            [
                'as'=>'users.create',
                'uses'=>'Admin\UserController@create',
                'middleware'=>'can:user-add'
            ]);
        Route::post('/store',
            [
                'as'=>'users.store',
                'uses'=>'Admin\UserController@store'
            ]);
        Route::get('/edit/{id}',
            [
                'as'=>'users.edit',
                'uses'=>'Admin\UserController@edit',
                'middleware'=>'can:user-edit'
            ]);
        Route::get('/delete/{id}',
            [
                'as'=>'users.delete',
                'uses'=>'Admin\UserController@delete',
                'middleware'=>'can:user-delete'
            ]);
        Route::post('/update/{id}',
            [
                'as'=>'users.update',
                'uses'=>'Admin\UserController@update'
            ]);
    });