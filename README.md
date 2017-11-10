# My First Library #
[![Build Status][ico-travis]][link-travis] [![Software License][ico-license]](LICENSE.md) [![Coverage Status][ico-scrutinizer]][link-scrutinizer] [![Quality Score][ico-code-quality]][link-code-quality]

This is my very first library I created at php[world]. I learned that I have to create a README file to provide a description of my library so it can be used by other projects or persons.

### The steps to create "my first library" ###

1- create the my_first_library directory

    cd ~ && mkdir -p phplibrary/my_first_library && cd phplibrary/my_first_library

2- create a README.md file

    vim README.md

3- initialize a git repository

    git init

4- Do the first commit

    git add .
    git commit -m "First commit of my library"

5- Assign a version to your library

    git tag -a v0.1.0 -m "version 0.1.0"

6- Create a repository in github or bitbucket
7- Connect your repository with github (or bitbucket)

    git remote add origin https://github.com/ConquerorSoft/my_first_library.git
    git push -u origin master
    git push origin v0.1.0

8- run composer init

    composer init

9- enter all the information asked by composer init

    Package name (<vendor>/<name>) [gabriel/my_first_library]: conquerorsoft/my_first_library
    Description []: This is my very first library created with composer init
    Author [Christian Varela <dobleclick.mx@gmail.com>, n to skip]: Christian Varela <cvarela@conquerorsoft.com>
    Minimum Stability []: stable
    Package Type (e.g. library, project, metapackage, composer-plugin) []: library
    License []: MIT

    Define your dependencies.

    Would you like to define your dependencies (require) interactively [yes]? no
    Would you like to define your dev dependencies (require-dev) interactively [yes]?
    Search for a package: phpunit

    Found 15 packages matching phpunit

       [0] phpunit/phpunit
       [1] mockery/mockery
       [2] phpunit/phpunit-mock-objects
       [3] phpunit/php-timer
       [4] phpunit/php-code-coverage
       [5] phpunit/phpunit-selenium
       [6] brianium/paratest
       [7] phpunit/php-token-stream
       [8] phpunit/php-text-template
       [9] phpunit/php-file-iterator
      [10] mybuilder/phpunit-accelerator
      [11] johnkary/phpunit-speedtrap
      [12] symfony/phpunit-bridge
      [13] nette/tester
      [14] gecko-packages/gecko-php-unit

    Enter package # to add, or the complete package name if it is not listed: 0
    Enter the version constraint to require (or leave blank to use the latest version): ^5.7
    Using version ^5.7 for phpunit/phpunit
    Search for a package:

    {
        "name": "conquerorsoft/my_first_library",
        "description": "This is my very first library created with composer init",
        "type": "library",
        "require-dev": {
            "phpunit/phpunit": "^5.7"
        },
        "license": "MIT",
        "authors": [
            {
                "name": "Christian Varela",
                "email": "cvarela@conquerorsoft.com"
            }
        ],
        "minimum-stability": "stable",
        "require": {}
    }

    Do you confirm generation [yes]?
    Would you like the vendor directory added to your .gitignore [yes]?

10- composer.json file is created, commit to git

    git add .
    git commit -m "Composer init"
    git tag -a v0.1.1 -m "version 0.1.1"
    git push -u origin master
    git push origin v0.1.1

11- Run composer install

    composer install

12- Add composer.lock to .gitignore

    echo "composer.lock" >> .gitignore

13- create a Changelog file ( this format is recommended: [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) )

    vim CHANGELOG.md

14- commit to git

    git add .
    git commit -m "Changelog file added"
    git tag -a v0.1.2 -m "version 0.1.2"
    git push -u origin master
    git push origin v0.1.2

15- Create structure for starting the development

    mkdir src && mkdir tests

16- Edit the composer.json file to be this way now:

    {
        "name": "conquerorsoft/my_first_library",
        "description": "This is my very first library created with composer init",
        "keywords": [
            "conquerorsoft",
            "my_first_library",
            "tutorial",
            "phpworld 2017",
            "workshop"
        ],
        "homepage": "http://www.conquerorsoft.com/my_first_library",
        "type": "library",
        "require-dev": {
            "phpunit/phpunit": "^5.7",
            "squizlabs/php_codesniffer": "3.*"
        },
        "license": "MIT",
        "authors": [
            {
                "name": "Christian Varela",
                "email": "cvarela@conquerorsoft.com",
                "homepage": "http://www.conquerorsoft.com/ChristianVarela",
                "role": "Developer"
            }
        ],
        "minimum-stability": "stable",
        "require": {
            "php": "~5.6 || ~7.0"
        },
        "autoload": {
            "psr-4": {
                "conquerorsoft\\my_first_library\\": "src"
            }
        },
        "autoload-dev": {
            "psr-4": {
                "conquerorsoft\\my_first_library\\": "tests"
            }
        },
        "scripts": {
            "test": "phpunit",
            "check-style": "phpcs -p --standard=PSR2 --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 src tests",
            "fix-style": "phpcbf -p --standard=PSR2 --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 src tests"
        }
    }

17- Create file phpunit.xml

    vim phpunit.xml

18- add build to .gitignore

    echo build >> .gitignore

19- run composer update

    composer update

20- commit to git

    git add .
    git commit -m "Preparation for development"
    git tag -a v0.1.3 -m "version 0.1.3"
    git push -u origin master
    git push origin v0.1.3

21- Add a LICENSE.md file (for this example we chose MIT)

    vim LICENSE.md

22- Create tests/FirstClassTest.php

    vim tests/FirstClassTest.php

23- Create src/FirstClass.php

    vim src/FirstClass.php

24- commit to git

    git add .
    git commit -m "Encode and decode string functionality"
    git tag -a v0.1.4 -m "version 0.1.4"
    git push -u origin master
    git push origin v0.1.4

25- docblock everything including classes, files and functions

    /**
     * This is a summary example
     *
     * This is a description
     *
     * @example this is tag
     */

26- commit to git

    git add .
    git commit -m "Docblocks added everywhere"
    git tag -a v0.1.5 -m "version 0.1.5"
    git push -u origin master
    git push origin v0.1.5

27- add repository to Travis and create travis configuration file
    
    vim .travis.yml

28- commit to git

    git add .
    git commit -m "Travis CI integration"
    git tag -a v0.1.6 -m "version 0.1.6"
    git push -u origin master
    git push origin v0.1.6

29- change composer.json to change phpunit to version ^5.7

    vim composer.json

30- commit to git

    git add .
    git commit -m "Phpunit version changed to support php version 5.6"
    git tag -a v0.1.7 -m "version 0.1.7"
    git push -u origin master
    git push origin v0.1.7

31- Get travis badge and put it in README file

    vim README.md

32- Put license badge in README file
33- commit to git

    git add .
    git commit -m "Travis CI and License badges in README"
    git tag -a v0.1.8 -m "version 0.1.8"
    git push -u origin master
    git push origin v0.1.8

34- Create scrutinizer-ci account and link with github
35- Create .scrutinizer.yml file

    vim .scrutinizer.yml

36- Get scrutinizer badges in README file

    vim README.md

37- commit to git

    git add .
    git commit -m "Scrutinizer CI and badges in README"
    git tag -a v0.1.9 -m "version 0.1.9"
    git push -u origin master
    git push origin v0.1.9

38- Remove type hinting that is not compatible with php 5.6

    vim FirstClass.php

39- commit to git

    git add .
    git commit -m "Fixes to uncompatible type hinting"
    git tag -a v0.1.10 -m "version 0.1.10"
    git push -u origin master
    git push origin v0.1.10

40- apply patch from scrutinizer
41- commit to git

    git add .
    git commit -m "Spacing patch from scrutinizer applied"
    git tag -a v0.1.11 -m "version 0.1.11"
    git push -u origin master
    git push origin v0.1.11

42- Create Contributing files

    vim CONTRIBUTING.md
    vim CODE_OF_CONDUCT.md

43- Add more sections to README file

- Install
- Usage
- Change log
- Testing
- Contributing
- Security
- Credits
- License

44- commit to git

    git add .
    git commit -m "Improvements to README"
    git tag -a v0.1.12 -m "version 0.1.12"
    git push -u origin master
    git push origin v0.1.12

45- Add .gitattributes file to ignore some files or folders when --prefer-dist is used

    vim .gitattributes

46- commit to git

    git add .
    git commit -m ".gitattributes file created"
    git tag -a v0.1.13 -m "version 0.1.13"
    git push -u origin master
    git push origin v0.1.13

## Install ##

With composer

    composer require conquerorsoft/my_first_library

## Usage ##

    $my_first_library = new conquerorsoft\my_first_library\FirstClass();
    $encoded_string = $my_first_library->encodeString("Encoding this string");
    $decode_string = $my_first_library->decodeString("03wwrwp o0xv v7 or012 y0xsnl2");

## Change Log ##

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing ##

    composer test

## Contributing ##

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security ##

If you discover any security related issues, please email cvarela@conquerorsoft.com instead of using the issue tracker.

## Credits ##

- [Christian Varela][link-author]

## License ##

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat
[ico-travis]: https://travis-ci.org/ConquerorSoft/my_first_library.svg?branch=master
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/conquerorsoft/my_first_library.svg?style=flat
[ico-code-quality]: https://img.shields.io/scrutinizer/g/conquerorsoft/my_first_library.svg?style=flat

[link-travis]: https://travis-ci.org/ConquerorSoft/my_first_library
[link-scrutinizer]: https://scrutinizer-ci.com/g/conquerorsoft/my_first_library/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/conquerorsoft/my_first_library
[link-author]: https://github.com/gabrielconqueror
