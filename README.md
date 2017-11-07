# My First Library #

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
