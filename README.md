<a href="https://c9sd.com" target="_blank"><img src="https://c9sd.s3.amazonaws.com/images/logos/logo-g.svg" width="400"></a>

#Easy Payroll Online
Payroll application with multitenancy

#### DEVELOP ON
    -Laravel 8.x
        - Laravel Cashier
        - Laraver Spark
        - Jetstream - livewire
        - barryvdh/laravel-debugbar (recomended)
        - Tenancy for laravel
        - league/flysystem-aws-s3-v3
    - PHP version 8.x  
    -Stripe
    -JQuery 3.x
    -filepond
    -Fontawesome
    -AlpineJs
    -Tippy.js
    -
  
###Installation
    - UNZIP FILE
    
        - Run composer install

        - IMPORTANT Please remove comments form webpack.mix.js to install vendor requirements.
    
        - Run npm install && mpm run dev
    
        - create .env file (there is an empty copy on /resources/data)
    
        - generate laravel key
    
        - link storage file
    
        - create database
    
        - run migrations

    
        - translations (resources/lang/es and resources/lang/es.json)
    
        - composer require league/flysystem-aws-s3-v3 "~1.0"

        - composer require pusher/pusher-php-server
        
        - npm install --save-dev laravel-echo pusher-js

        - composer global require beyondcode/expose
            - expose share payroll.dev

        


#### ADMIN LOGIN
    'email' =  admin@c9sd.com
    'password' = @password

###LARAVEL VENDOR

###FRONTEND VENDOR


###DATA
    *create data folder on resources and put data files
        - files:
            .env
        
###NOTES
    *keep an eye on tailwind mode jit   

    - db staging name: payroll_landlord
    - db staging user: payroll_user
    - db staging password: 47lhzm0old0hrxnsl6lu


payroll_user
        

>created and edited by alex vaught 30-06-2021

