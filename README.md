# [Rubic's cube](logo.png)


This repo is partially functional.

Image example: https://github.com/aleksdjukic/rubiks-cube/tree/main/public/rubics-cube.jpg

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

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    GET: http://localhost:8000/api/cube/1

----------
## API Specification

### API Resources

- [GET /api/cube/[game_id]](#get-game)
- [POST /api/cube/rotate/[direction]/[orientation]/[row]](#rotate-rubic's-cube)

### GET /api/cube/[game_id]

Example: http://loocalohost:8000/api/cube/1

Response body:

    {
         'position' => [
                'horizontal' => [
                    '1' => [
                        '1' => 'o1',
                        '2' => 'o2',
                        '3' => 'o3',

                        '4' => 'g1',
                        '5' => 'g2',
                        '6' => 'g3',

                        '7' => 'r1',
                        '8' => 'r2',
                        '9' => 'r3',

                        '10' => 'b1',
                        '11' => 'b2',
                        '12' => 'b3',
                    ],
                    '2' => [
                        '1' => 'o4',
                        '2' => 'o5',
                        '3' => 'o6',

                        '4' => 'g4',
                        '5' => 'g5',
                        '6' => 'g6',

                        '7' => 'r4',
                        '8' => 'r5',
                        '9' => 'r6',

                        '10' => 'b4',
                        '11' => 'b5',
                        '12' => 'b6',
                    ],
                    '3' => [
                        '1' => 'o7',
                        '2' => 'o8',
                        '3' => 'o9',

                        '4' => 'g7',
                        '5' => 'g8',
                        '6' => 'g9',

                        '7' => 'r7',
                        '8' => 'r8',
                        '9' => 'r9',

                        '10' => 'b7',
                        '11' => 'b8',
                        '12' => 'b9',
                    ],
                ],
                'vertical' => [
                    '1' => [
                        '1' => 'g1',
                        '2' => 'g4',
                        '3' => 'g7',

                        '4' => 'y1',
                        '5' => 'y4',
                        '6' => 'y7',

                        '7' => 'b1',
                        '8' => 'b4',
                        '9' => 'b7',

                        '10' => 'w1',
                        '11' => 'w4',
                        '12' => 'w7',
                    ],
                    '2' => [
                        '1' => 'g2',
                        '2' => 'g5',
                        '3' => 'g8',

                        '4' => 'y2',
                        '5' => 'y5',
                        '6' => 'y8',

                        '7' => 'b2',
                        '8' => 'b5',
                        '9' => 'b8',

                        '10' => 'w2',
                        '11' => 'w5',
                        '12' => 'w8',
                    ],
                    '3' => [
                        '1' => 'g3',
                        '2' => 'g6',
                        '3' => 'g9',

                        '4' => 'y3',
                        '5' => 'y6',
                        '6' => 'y9',

                        '7' => 'b3',
                        '8' => 'b6',
                        '9' => 'b9',

                        '10' => 'w3',
                        '11' => 'w6',
                        '12' => 'w9',
                    ],
                ]
            ],
            'Created_at' => time
    }

### POST /api/cube/rotate/[direction]/[orientation]/[row]

Example: http://loocalohost:8000/api/cube/rotate?direction=right&orientation=vertical&row=1

Request:

    {
         "direction" :  "left",
         "orientation" : "horizontal",
         "row" : "1"
    }

Response body:

    {
    "vertical": {
        "1": {
            "1": "g1",
            "2": "g4",
            "3": "g7",
            "4": "y1",
            "5": "y4",
            "6": "y7",
            "7": "b1",
            "8": "b4",
            "9": "b7",
            "10": "w1",
            "11": "w4",
            "12": "w7"
        },
        "2": {
            "1": "g2",
            "2": "g5",
            "3": "g8",
            "4": "y2",
            "5": "y5",
            "6": "y8",
            "7": "b2",
            "8": "b5",
            "9": "b8",
            "10": "w2",
            "11": "w5",
            "12": "w8"
        },
        "3": {
            "1": "g3",
            "2": "g6",
            "3": "g9",
            "4": "y3",
            "5": "y6",
            "6": "y9",
            "7": "b3",
            "8": "b6",
            "9": "b9",
            "10": "w3",
            "11": "w6",
            "12": "w9"
        }
    },
    "horizontal": {
        "1": {
            "1": "o1",
            "2": "o2",
            "3": "o3",
            "4": "g1",
            "5": "g2",
            "6": "g3",
            "7": "r1",
            "8": "r2",
            "9": "r3",
            "10": "b1",
            "11": "b2",
            "12": "b3"
        },
        "2": [
            "g4",
            "g5",
            "g6",
            "r4",
            "r5",
            "r6",
            "b4",
            "b5",
            "b6",
            "o4",
            "o5",
            "o6"
        ],
        "3": {
            "1": "o7",
            "2": "o8",
            "3": "o9",
            "4": "g7",
            "5": "g8",
            "6": "g9",
            "7": "r7",
            "8": "r8",
            "9": "r9",
            "10": "b7",
            "11": "b8",
            "12": "b9"
        }
    }
}




