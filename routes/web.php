<?php

// Route::group (['domain' => '{account} .domain.com'], function () 
// {
//   Route::get ('user/{id}', function ($account, $id) {
//   }); 
// });

Route::group(['domain' => 'wildcard'], function() {
    Route::any('/', function() {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => '{username}.wildcard'], function() {
    Route::any('/', function($username) {
        return 'You visit your account: '. $username; 
    });
});