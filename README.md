# Naughty Strings Validator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Symfony validator for unsafe strings, based on [minimaxir/big-list-of-naughty-strings](https://github.com/minimaxir/big-list-of-naughty-strings).

## Install

Via Composer

``` bash
$ composer require emanueleminotto/naughty-validator
```

## Usage

``` php
use EmanueleMinotto\NaughtyValidator\NotNaughty;

$constraint = new NotNaughty();
$constraint->message = 'This value is not safe.';

// use the validator to validate the value
$errorList = $this
    ->get('validator')
    ->validate('<>?:"{}|_+', $constraint);

$errorMessage = $errorList[0]->getMessage();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email minottoemanuele@gmail.com instead of using the issue tracker.

## Credits

- [Emanuele Minotto][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/emanueleminotto/naughty-validator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/EmanueleMinotto/naughty-validator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/emanueleminotto/naughty-validator.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/emanueleminotto/naughty-validator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/emanueleminotto/naughty-validator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/emanueleminotto/naughty-validator
[link-travis]: https://travis-ci.org/EmanueleMinotto/naughty-validator
[link-scrutinizer]: https://scrutinizer-ci.com/g/emanueleminotto/naughty-validator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/emanueleminotto/naughty-validator
[link-downloads]: https://packagist.org/packages/emanueleminotto/naughty-validator
[link-author]: https://github.com/EmanueleMinotto
[link-contributors]: ../../contributors
