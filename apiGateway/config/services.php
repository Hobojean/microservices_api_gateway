<?php
//comments


return [
    'message' => [
        'base_uri' => env('MESSAGE_SERVICE_BASE_URI'),
        'secret' => env('MESSAGE_SERVICE_SECRET')
    ],
    'user' => [
        'base_uri' => env('USER_SERVICE_BASE_URI'),
        'secret' => env('USER_SERVICE_SECRET')
    ],
    'discussion' => [
        'base_uri' => env('DISCUSSION_SERVICE_BASE_URI'),
        'secret' => env('DISCUSSION_SERVICE_SECRET'),
    ]
];
