
<p align="center"><img src="/art/socialcard.png" alt="Laravel Sitemap by Sertxu Developer"></p>

# Laravel Sitemap

![](https://img.shields.io/github/v/release/sertxudeveloper/laravel-sitemap) ![](https://img.shields.io/github/license/sertxudeveloper/laravel-sitemap) ![](https://img.shields.io/librariesio/github/sertxudeveloper/laravel-sitemap) ![](https://img.shields.io/github/repo-size/sertxudeveloper/laravel-sitemap) ![](https://img.shields.io/packagist/dt/sertxudeveloper/laravel-sitemap) ![](https://img.shields.io/github/issues/sertxudeveloper/laravel-sitemap) ![](https://img.shields.io/packagist/php-v/sertxudeveloper/laravel-sitemap)

Generate a sitemap of your Laravel app.

## Requirements
  - PHP >= 7.4
  - Laravel >= 8.x

## Installation
You can install this package using Composer.

```sh
composer require sertxudeveloper/laravel-sitemap
```
<br>

# Generate the sitemap
First you need to initialize the sitemap.
```php
$sitemap = Sitemap::create();
```

## Add Routes
Next you should add the routes to the sitemap.

```php
$sitemap->add(Url::create(route("main.index")));
```

## Save the sitemap
After adding all the routes you want in the sitemap, you should save it in a file.
```php
$sitemap->writeToFile(public_path('sitemap.xml'))
```

## Contributing

Please see [CONTRIBUTING](https://github.com/sertxudeveloper/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sergio Peris](https://github.com/sertxudev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<br><br>
<p align="center">Copyright © 2022 Sertxu Developer</p>
