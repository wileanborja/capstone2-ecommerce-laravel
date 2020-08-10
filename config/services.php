<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
     'client_id' => '343260416594544',
     'client_secret' => '41b6922ed0a8d7abf306e027f7d88b4e',
     'redirect' => 'http://localhost:8000/catalog',
   ],

   'google' => [
        'client_id' => '424152179894-6rercge6vpnt12j7fu6k693vfqm2c9us.apps.googleusercontent.com',
        'client_secret' => 'lpPDkrrsSwOHR0jz3KaKj9S3',
        'redirect' => 'http://localhost:8000/catalog',
    ],

];
