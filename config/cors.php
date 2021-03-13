<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

<<<<<<< HEAD
    'exposed_headers' => [],

    'max_age' => 0,
=======
    'exposed_headers' => false,

    'max_age' => false,
>>>>>>> 2339f7a0bddd9bb5e8f5bca638673e13ec5f190e

    'supports_credentials' => false,

];
