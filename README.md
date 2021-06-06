# PRIAPI - API Testing tool for Laravel

[![Build Status][ico-actions]][link-actions]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


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


## License

Released under the MIT License, see [LICENSE](LICENSE).

[ico-version]: https://img.shields.io/packagist/v/fruitcake/laravel-cors.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-actions]: https://github.com/fruitcake/laravel-cors/workflows/.github/workflows/run-tests.yml/badge.svg
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/fruitcake/laravel-cors.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/fruitcake/laravel-cors.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fruitcake/laravel-cors.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/fruitcake/laravel-cors
[link-actions]: https://github.com/fruitcake/laravel-cors/actions
[link-scrutinizer]: https://scrutinizer-ci.com/g/fruitcake/laravel-cors/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/fruitcake/laravel-cors
[link-downloads]: https://packagist.org/packages/fruitcake/laravel-cors
[link-author]: https://github.com/fruitcake
[link-contributors]: ../../contributors


## Author

> Kevin Tran <tranthai@enjoyworks.co.kr>

> www.ktranblog.com