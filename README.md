# Blade directive for short human readable numbers (i.e. 3K+, 4M+)

<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/wprk/laravel-blade-readable-numbers.svg?style=flat-square)](https://packagist.org/packages/wprk/laravel-blade-readable-numbers)
[![Total Downloads](https://img.shields.io/packagist/dt/wprk/laravel-blade-readable-numbers.svg?style=flat-square)](https://packagist.org/packages/wprk/laravel-blade-readable-numbers) -->
-->
Adds the `@longInt` directive to Laravel's Blade templating system. This way you can shorten numbers into strings like `123K+`.

## Installation

You can install the package via composer:

```bash
composer require heliumargon/laravel-blade-readable-numbers
```

## Usage

```php
@longInt(123456) // outputs 123K+
@longInt(123456789) // outputs 123M+
@longInt(123456789012) // outputs 123B+
@longInt(123456789012345) // outputs 123T+
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email wprk14@gmail.com instead of using the issue tracker.

## Credits

- [Sander van Hooft](https://github.com/SanderVanHooft) - [www.sandervanhooft.com](https://www.sandervanhooft.com)
- [Will Parker](https://github.com/wprk) - [www.wipar.co.uk](https://www.wipar.co.uk)
- [Appstract](https://github.com/appstract/laravel-blade-directives) for blade directive testing methods
- [Radley Sustaire (RadGH)](https://github.com/RadGH) and [Hassan Amir Khan (hassanamirkhan)](https://github.com/hassanamirkhan) for [the short-number-format gist](https://gist.github.com/RadGH/84edff0cc81e6326029c).
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
