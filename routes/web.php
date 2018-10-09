<?php

// Route::any('/', function() {
//     return 'My own domain';
// }); 

Route::group(['domain' => 'projred.webuffsolutions.com'], function() {
    Route::any('/', function() {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => '{username}.projred.webuffsolutions.com'], function() {
    Route::any('/', function($username) {
        return 'You visit your account: '. $username; 
    });
});