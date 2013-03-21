TDD PHP Example: SimpleString Library
=====================================

[![Build Status](https://secure.travis-ci.org/tdd-php/lib-simple-string.png?branch=master)](http://travis-ci.org/tdd-php/lib-simple-string)

Example application using `tdd-php/lib-simple-string` library
is available at (https://github.com/tdd-php/app-simple-string).

How to generate tests?
----------------------

    pear -c c:\xampp\php\pear.ini install phpunit/PHPUnit_SkeletonGenerator
    phpunit-skelgen --test SimpleString.php
    phpunit-skelgen --test -- "Gajdaw\TddExamples\SimpleString" SimpleString


    phpunit --skeleton-test
    phpunit  --coverage-html coverage/


How to run tests?
-----------------

    First, install dependencies:

        composer install --dev

    Next, run:

        phpunit
        phpunit  --coverage-html coverage/


How to generate zipped archive?
-------------------------------

    git archive --format=zip --output=../lib-simple-string-master.zip HEAD


How to generate API documentation with PhpDocumentor?
-----------------------------------------------------

    phpdoc -d . -t docs --ignore=Tests/*,vendor/*


How to test coding standards with PHPCS?
----------------------------------------

    phpcs  --standard=Symfony2 . --ignore=Tests,vendor --extensions=php --encoding=utf-8

    mkdir phpcs
    phpcs  --standard=Symfony2 . --ignore=Tests,vendor --extensions=php --encoding=utf-8 > phpcs/results.txt
