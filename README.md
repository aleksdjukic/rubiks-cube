# [Rubic's cube](logo.png)


This repo is partially functional — PRs and issues welcome!

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/aleksdjukic/rubiks-cube.git

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeder and you're done

    php artisan db:seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


The api can be accessed at [http://localhost:8000/api](http://localhost:8000/api).

## API Specification

The documentation can be found on the links below as a pdf file

     http://localhost:8000/documentation/game.pdf
     http://localhost:8000/documentation/move.pdf

----------

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers/Api` - Contains all the api controllers
- `app/Http/Middleware` - Contains the middleware
- `config` - Contains all the application configuration files
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the api routes defined in api.php file
- `tests` - Contains all the application tests
- `tests/Feature/Api` - Contains all the api tests

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000/api

    GET: http://localhost:8000/api/cube/1
    POST: http://localhost:8000/api/cube/rotate?direction=left&orientation=horizontal&row=1

Request headers

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| No      	| Content-Type     	| application/json 	|
| No      	| X-Requested-With 	| XMLHttpRequest   	|
| No 	    | Authorization    	| Token {JWT}      	|

----------
