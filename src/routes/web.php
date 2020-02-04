<?php

Route::group(['namespace' => 'Sharait\Contact\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');

});
    

