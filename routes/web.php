<?php

// Route::any('/', function() {
//     return 'My own domain';
// }); 

Route::group(['domain' => '18.220.78.40'], function() {
    Route::any('/', function() {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => '{username}.18.220.78.40'], function() {
    Route::any('/', function($username) {
        return 'You visit your account: '. $username; 
    });
});