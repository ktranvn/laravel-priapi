# PRIAPI - API Testing tool for Laravel

## About

Instead of configuring complicated annotations like swagger or using postman, you can now use this package as an alternative to the combination of postman and swagger.


## Features

* Add and test the requests to the API of the laravel project you are integrating
* Organize requests as a directory tree
* Share with other teams in the project
* Export API request list to API document or API request sheets (will update in the next version)

## Installation

Require the `ktran/priapi` package in your `composer.json` and update your dependencies:
```sh
composer require ktran/priapi
```
```sh
php artisan migrate
```

## Configuration

The defaults are set in `config/priapi.php`. Publish the config to copy the file to your own config:
```sh
php artisan vendor:publish --provider="Ktran\Priapi\PriapiServiceProvider"
```


## Author

> Kevin Tran <tranthai@enjoyworks.co.kr>

> www.ktranblog.com