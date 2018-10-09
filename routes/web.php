<?php

// Route::any('/', function() {
//     return 'My own domain';
// }); 

Route::group(['domain' => 'https://www.academeportal.com'], function() {
    Route::any('/', function() {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => 'https://www.{username}.academeportal.com'], function() {
    Route::any('/', function($username) {
        return 'You visit your account: '. $username; 
    });
});