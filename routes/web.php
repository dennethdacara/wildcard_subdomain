<?php

// Route::group (['domain' => '{account} .domain.com'], function () 
// {
//   Route::get ('user/{id}', function ($account, $id) {
//   }); 
// });

Route::group(['domain' => 'fakebook.test'], function() {
    Route::any('/', function() {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => '{username}.fakebook.test'], function() {
    Route::any('/', function($username) {
        return 'You visit your account: '. $username; 
    });
});