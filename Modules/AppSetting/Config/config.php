<?php

return [
    'name' => 'AppSetting',
    'icon' => 'nav-icon fas fa-cog',
    'basic' => [
        
        'name' => env('APP_NAME', 'Boilerplate'),
        'email' => env('APP_EMAIL', 'boilerplate@gmail.com'),
        
        'address' => env('APP_ADDRESS', 'Fake Address'),
        'phone' => env('APP_PHONE', '+95925411499,+95993423214'),
        'main_logo' => env('MAIN_LOGO', ''),
       
    ],
];
