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
        'client_id' => env('GOOGLE_ID','596810964601-fk948manpsrc5qll1l9coqn6jgf6kv44.apps.googleusercontent.com'),
        'client_secret' => env('GOOGLE_SECRET','1HBV72UdFvQjVM95eYwU4cjH'),
        'redirect' => env('GOOGLE_URL','http://denunciasanonimas.herokuapp.com/auth/google/callback'),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_ID','182448992598810'),
        'client_secret' => env('FACEBOOK_SECRET','161ded92f531f20dc2cf58b2c3f738a16'),
        'redirect' => env('FACEBOOK_URL','http://denunciasanonimas.herokuapp.com/auth/facebook/callback'),
    ],

    'twitter' => [
        'client_id'     => env('TWITTER_ID','eFoHuEf3u8XWbDWYqPRtEotvk'),
        'client_secret' => env('TWITTER_SECRET','DcVNrXeuwmLxVl5D58NbcnwcmdCCg4WZDpbmzXjoqA8qBBxQQn'),
        'redirect'      => env('TWITTER_URL','http://denunciasanonimas.herokuapp.com/auth/twitter/callback'),
    ],
];
