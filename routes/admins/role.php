<?php  
Route::prefix('roles')->group(function () {
        Route::get('/',
            [
                'as'   => 'roles.index',
                'uses' => 'Admin\RoleController@index',
                 'middleware'=>'can:role-list'
            ]);
        Route::get('/create',
            [
                'as'=>'roles.create',
                'uses'=>'Admin\RoleController@create',
                 'middleware'=>'can:role-add'
            ]);
        Route::post('/store',
            [
                'as'=>'roles.store',
                'uses'=>'Admin\RoleController@store'
            ]);
        Route::get('/edit/{id}',
            [
                'as'=>'roles.edit',
                'uses'=>'Admin\RoleController@edit',
                 'middleware'=>'can:role-edit'
            ]);
        Route::get('/delete/{id}',
            [
                'as'=>'roles.delete',
                'uses'=>'Admin\RoleController@delete',
                 'middleware'=>'can:role-delete'
            ]);
        Route::post('/update/{id}',
            [
                'as'=>'roles.update',
                'uses'=>'Admin\RoleController@update'
            ]);
    });