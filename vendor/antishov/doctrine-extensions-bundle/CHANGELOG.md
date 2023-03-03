## 1.4.3 (2020-12-12)

Features:

* PHP 8 support
* Doctrine 3 support

Bugfixes:

* Fixed uploadable extension

## 1.4.2 (2019-12-4)

Bugfixes:

* Fixed crashes in Windows on invalid directory name

## 1.4.1 (2019-11-27)

Features:

* Symfony 5 support
* Removed PHP 5 and Symfony 2 & 3 support

Bugfixes:

* Deprecation fixes

## 1.4.0 (2019-08-07)

Features:

* Added docker

Bugfixes:

* Fixed deprecations by Symfony 4.2
* Fixed Travis builds

## 1.3.0 (2017-12-24)

Features:

* Added support for Symfony 4
* Added autowiring support for `Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager`

Bugfixes:

* Fixed usage of loggable and soft-deleteable together to ensure soft-deletions are logged
* Removed the logic running on bundle boot to avoid overhead

Removed:

* Dropped support for unmaintained versions of Symfony

## 1.2.2 (2016-01-27)

* Added support for Symfony 3

## 1.2.1 (2015-08-12)

* Fixed the BlameListener

## 1.2.0 (2015-08-12)

Bugfixes:

* Fixed the handling of the directory validation of the uploadable extension
* Removed usage of APIs deprecated in Symfony 2.6+

Features:

* Marked the Gedmo extensions 2.4.0 release as supported (as well as any future 2.x release thanks to semver)
