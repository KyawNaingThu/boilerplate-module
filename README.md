## Laravel Boilerplate (Current: Laravel 8.*) ([Demo](https://demo.laravel-boilerplate.com))

### MAKE SURE composer update kyawnaingthu/laravel-modules ###
- after fresh install
- composer install
- npm install && npm run dev
- php artisan migrate
- php artisan db:seed

- php artisan module:enable AppSetting
- php artisan module:seed AppSetting
- php artisan optimize
### Demo Credentials

**Admin:** admin@admin.com  
**Password:** secret

**User:** user@user.com  
**Password:** secret

### Official Documentation

[Click here for the official documentation](http://laravel-boilerplate.com)
### Introduction

Laravel Boilerplate provides you with a massive head start on any size web application. Out of the box it has features like a backend built on CoreUI with Spatie/Permission authorization. It has a frontend scaffold built on Bootstrap 4. Other features such as Two Factor Authentication, User/Role management, searchable/sortable tables built on my [Laravel Livewire tables plugin](https://github.com/rappasoft/laravel-livewire-tables), user impersonation, timezone support, multi-lingual support with 20+ built in languages, demo mode, and much more.

### Issues

If you come across any issues please [report them here](https://github.com/rappasoft/laravel-boilerplate/issues).

### Contributing

Thank you for considering contributing to the Laravel Boilerplate project! Please feel free to make any pull requests, or e-mail me a feature request you would like to see in the future to Anthony Rappa at rappa819@gmail.com.

### Security Vulnerabilities

If you discover a security vulnerability within this boilerplate, please send an e-mail to Anthony Rappa at rappa819@gmail.com, or create a pull request if possible. All security vulnerabilities will be promptly addressed.

### License

MIT: [http://anthony.mit-license.org](http://anthony.mit-license.org)

### Customize With Laravel Module by KyawNaingThu
- added AppSetting Module
- added customized module 
- php artisan module:make [module_name]
- php artisan module:seed [module_name] for permission.
