# StofDoctrineExtensionsBundle

This bundle provides integration for
[DoctrineExtensions](https://github.com/Atlantic18/DoctrineExtensions) in
your Symfony Project

[![Total Downloads](https://poser.pugx.org/antishov/doctrine-extensions-bundle/downloads.png)](https://poser.pugx.org/antishov/doctrine-extensions-bundle/downloads)
[![Latest Stable Version](https://poser.pugx.org/antishov/doctrine-extensions-bundle/v/stable.png)](https://packagist.org/packages/antishov/doctrine-extensions-bundle)
[![Build Status](https://travis-ci.com/antishov/StofDoctrineExtensionsBundle.svg?branch=master)](https://travis-ci.com/antishov/StofDoctrineExtensionsBundle)

## Installation

### Applications that use Symfony Flex

Open a command console, enter your project directory and execute:

```console
$ composer require antishov/doctrine-extensions-bundle
```

### Applications that don't use Symfony Flex

#### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require antishov/doctrine-extensions-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

#### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],
];
```

## Requirements

* The minimum required PHP is 7.2.5
* Symfony 4.4 or greater

## Contributing

Run tests in docker for an all supported versions of PHP:
```
$ docker-compose -f docker-compose.tests.yml up
```

Pull-requests and issues are welcomed.

For documentation, see it [online](https://symfony.com/doc/master/bundles/StofDoctrineExtensionsBundle/index.html)

> This is a fork of [stof/StofDoctrineExtensionsBundle](https://github.com/stof/StofDoctrineExtensionsBundle) which has a lot of issues and is not maintained anymore.

License: [MIT](LICENSE)