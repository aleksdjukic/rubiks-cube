# [Rubic's cube](logo.png)

This repo is partially functional.

Image example: https://github.com/aleksdjukic/rubiks-cube/tree/main/public/rubics-cube.jpg

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you
start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

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

----------

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers/Api` - Contains all the api controllers
- `config` - Contains all the application configuration files
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the api routes defined in api.php file

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application
fully working.

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    GET: http://localhost:8000/api/cube/1

----------

## API Specification

A service intended for displaying the Rubik's cube, game and movement.

Movements work on the principle of horizontal and vertical rows that moves.

### API Resources

- [GET /api/cube/[game_id]](#get-game)
- [POST /api/cube/rotate/[direction]/[orientation]/[row]](#rotate-rubic's-cube)

### GET /api/cube/[game_id]

A service intended to display the state of the Rubik's Cube, by game.

Example: http://localhost:8000/api/cube/1

Response body:

    {
    "position": {
        "vertical": {
            "1": [
                "green1",
                "green4",
                "green7",
                "yellow1",
                "yellow4",
                "yellow7",
                "blue1",
                "blue4",
                "blue7",
                "white1",
                "white4",
                "white7"
            ],
            "2": [
                "green2",
                "green5",
                "green8",
                "yellow2",
                "yellow5",
                "yellow8",
                "blue2",
                "blue5",
                "blue8",
                "white2",
                "white5",
                "white8"
            ],
            "3": [
                "green3",
                "green6",
                "green9",
                "yellow3",
                "yellow6",
                "yellow9",
                "blue3",
                "blue6",
                "blue9",
                "white3",
                "white6",
                "white9"
            ]
        },
        "horizontal": {
            "1": [
                "orange1",
                "orange2",
                "orange3",
                "green1",
                "green2",
                "green3",
                "red1",
                "red2",
                "red3",
                "blue1",
                "blue2",
                "blue3"
            ],
            "2": [
                "orange4",
                "orange5",
                "orange6",
                "green4",
                "green5",
                "green6",
                "red4",
                "red5",
                "red6",
                "blue4",
                "blue5",
                "blue6"
            ],
            "3": [
                "orange7",
                "orange8",
                "orange9",
                "green7",
                "green8",
                "green9",
                "red7",
                "red8",
                "red9",
                "blue7",
                "blue8",
                "blue9"
            ]
        }
    }


### POST /api/cube/rotate/[direction]/[orientation]/[row]

Service intended for movements on the Rubik's cube.
(It only works for the row 2.)

Direction can be left or right, and orientation horizontal or vertical.

Example: http://localhost:8000/api/cube/rotate?direction=left&orientation=horizontal&row=2

Request:

    {
         "direction" :  "left",
         "orientation" : "horizontal",
         "row" : "2"
    }

Response body:

    {
    "position": {
        "vertical": {
            "1": [
                "green1",
                "green4",
                "green7",
                "yellow1",
                "yellow4",
                "yellow7",
                "blue1",
                "blue4",
                "blue7",
                "white1",
                "white4",
                "white7"
            ],
            "2": [
                "green2",
                "green5",
                "green8",
                "yellow2",
                "yellow5",
                "yellow8",
                "blue2",
                "blue5",
                "blue8",
                "white2",
                "white5",
                "white8"
            ],
            "3": [
                "green3",
                "green6",
                "green9",
                "yellow3",
                "yellow6",
                "yellow9",
                "blue3",
                "blue6",
                "blue9",
                "white3",
                "white6",
                "white9"
            ]
        },
        "horizontal": {
            "1": [
                "orange1",
                "orange2",
                "orange3",
                "green1",
                "green2",
                "green3",
                "red1",
                "red2",
                "red3",
                "blue1",
                "blue2",
                "blue3"
            ],
            "2": [
                "green4",
                "green5",
                "green6",
                "red4",
                "red5",
                "red6",
                "blue4",
                "blue5",
                "blue6",
                "orange4",
                "orange5",
                "orange6"
            ],
            "3": [
                "orange7",
                "orange8",
                "orange9",
                "green7",
                "green8",
                "green9",
                "red7",
                "red8",
                "red9",
                "blue7",
                "blue8",
                "blue9"
            ]
        }
    }




