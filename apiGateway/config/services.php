<?php
//comments


return [
    'api_lumen' => [
        'base_uri' => env('APILUMEN_SERVICE_BASE_URI'),
        'secret' => env('APILUMEN_SERVICE_SECRET')
    ],
    'api_express' => [
        'base_uri' => env('APIEXPRESS_SERVICE_BASE_URI'),
        'secret' => env('APIEXPRESS_SERVICE_SECRET'),
    ]
];
