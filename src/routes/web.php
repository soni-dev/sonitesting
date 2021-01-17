<?php

Route::group(['namespace' => 'Soni\ContactEmail\Http\Controllers'], function () {
    Route::get('contacts', 'ContactController@index')->name('contacts');
    Route::post('contacts', 'ContactController@send');
});
