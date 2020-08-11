<?php  
Route::prefix('settings')->group(function () {
    Route::get('/',
        [
            'as'   => 'settings.index',
            'uses' => 'Admin\SettingController@index',
            'middleware'=>'can:setting-list'
        ]);
    Route::get('/create',
        [
            'as'=>'settings.create',
            'uses'=>'Admin\SettingController@create',
            'middleware'=>'can:setting-add'
        ]);
    Route::post('/store',
        [
            'as'=>'settings.store',
            'uses'=>'Admin\SettingController@store'
        ]);
    Route::get('/edit/{id}',
        [
            'as'=>'settings.edit',
            'uses'=>'Admin\SettingController@edit',
            'middleware'=>'can:setting-edit'
        ]);
    Route::get('/delete/{id}',
        [
            'as'=>'settings.delete',
            'uses'=>'Admin\SettingController@delete',
            'middleware'=>'can:setting-delete'
        ]);
    Route::post('/update/{id}',
        [
            'as'=>'settings.update',
            'uses'=>'Admin\SettingController@update'
        ]);
});