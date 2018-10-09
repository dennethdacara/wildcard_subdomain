<?php

// Route::any('/', function() {
//     return 'My own domain';
// }); 

Route::group(['domain' => 'academeportal.com'], function() {
    Route::any('/', function() {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => '{username}.academeportal.com'], function() {
    Route::any('/', function($username) {
        return 'You visit your account: '. $username; 
    });
});