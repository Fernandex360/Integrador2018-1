<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */


    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '596810964601-fk948manpsrc5qll1l9coqn6jgf6kv44.apps.googleusercontent.com',
        'client_secret' => '1HBV72UdFvQjVM95eYwU4cjH',
        'redirect' => 'http://denunciasanonimas.herokuapp.com/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => env('FACEBOOK_URL'),
    ],

    'twitter' => [
        'client_id'     => 'eFoHuEf3u8XWbDWYqPRtEotvk',
        'client_secret' => 'DcVNrXeuwmLxVl5D58NbcnwcmdCCg4WZDpbmzXjoqA8qBBxQQn',
        'redirect'      => 'http://denunciasanonimas.herokuapp.com/auth/twitter/callback',
    ],
];
