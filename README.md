[![Build Status](https://travis-ci.com/marcelobbfonseca/animal-shelters.svg?branch=master)](https://travis-ci.com/marcelobbfonseca/animal-shelters) [![codecov](https://codecov.io/gh/marcelobbfonseca/animal-shelters/branch/master/graph/badge.svg)](https://codecov.io/gh/marcelobbfonseca/animal-shelters) [![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

# Backend example project

Backend Laravel example project using laradock

## Run project
    Docker installed is required
    Clone project
    run:
```
    cd laradock/
    docker-compose up -d nginx postgres
```
    application will be running in localhost. No need to specify port.
    Just type localhost in your browser.

## Docker commands
    docker-compose up -d nginx postgres # Run docker containers
    docker-compose exec workspace bash  # Run workspace command line
    exit

## Laravel commands on workspace
    php artisan tinker # Run laravel console
    exit