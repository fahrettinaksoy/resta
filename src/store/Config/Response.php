<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Response Meta
    |--------------------------------------------------------------------------
    |
    | These are the keys to be automatically included in the documentation parameters
    | to be created for the application.With these keys, we prevent you from writing
    | the same keys over and over to the file that will create your documentation.
    |
    */
    'meta' => [
        'meta'=>[
            'success'=>core()->responseSuccess,
            'status'=>core()->responseStatus,
        ]
    ],

    /*
     |--------------------------------------------------------------------------
     | Application Response Resource
     |--------------------------------------------------------------------------
     |
     | These are the keys to be automatically included in the documentation parameters
     | to be created for the application.with response these keys, we prevent you from writing
     | the same keys over and over to the file that will create your documentation.
     |
     */
    'data' => 'resource'


];