# My First Library #

This is my very first library I created at php[world]. I learned that I have to create a README file to provide a description of my library so it can be used by other projects or persons.

### The steps to create "my first library" ###

1. create the my_first_library directory

    cd ~ && mkdir -p phplibrary/my_first_library && cd phplibrary/my_first_library

2. create a README.md file

    vim README.md

3. initialize a git repository

    git init

4. Do the first commit

    git add .
    git commit -m "First commit of my library"

5. Assign a version to your library

    git tag -a v0.1.0 -m "version 0.1.0"

6. Create a repository in github or bitbucket
7. Connect your repository with github (or bitbucket)

    git remote add origin git@bitbucket.org:gabriel0702/my_first_library.git
    git push -u origin master
    git push origin v0.1.0

8. run composer init

    composer init

9. enter all the information asked by composer init

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
    Enter the version constraint to require (or leave blank to use the latest version):
    Using version ^6.4 for phpunit/phpunit
    Search for a package:

    {
        "name": "conquerorsoft/my_first_library",
        "description": "This is my very first library created with composer init",
        "type": "library",
        "require-dev": {
            "phpunit/phpunit": "^6.4"
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

10. composer.json file is created, commit to git

	git add .
	git commit -m "Composer init"
	git tag -a v0.1.1 -m "version 0.1.1"
	git push -u origin master
	git push origin v0.1.1

11. Run composer install

	composer install

12. create a Changelog file ( this format is recommended: [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) )

	vim CHANGELOG.md

13. commit to git

	git add CHANGELOG.md
	git commit -m "Changelog file added"
	git tag -a v0.1.2 -m "version 0.1.2"
	git tag -a v0.1.2 -m "version 0.1.2"
	git push -u origin master
	git push origin v0.1.2
	