<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('games')->insert([
            'position' => json_encode([
                'horizontal' => [
                    '1' => [
                        0 => 'orange1',
                        1 => 'orange2',
                        2 => 'orange3',

                        3 => 'green1',
                        4 => 'green2',
                        5 => 'green3',

                        6 => 'red1',
                        7 => 'red2',
                        8 => 'red3',

                        9 => 'blue1',
                        10 => 'blue2',
                        11 => 'blue3',
                    ],
                    '2' => [
                        0 => 'orange4',
                        1 => 'orange5',
                        2 => 'orange6',

                        3 => 'green4',
                        4 => 'green5',
                        5 => 'green6',

                        6 => 'red4',
                        7 => 'red5',
                        8 => 'red6',

                        9 => 'blue4',
                        10 => 'blue5',
                        11 => 'blue6',
                    ],
                    '3' => [
                        0 => 'orange7',
                        1 => 'orange8',
                        2 => 'orange9',

                        3 => 'green7',
                        4 => 'green8',
                        5 => 'green9',

                        6 => 'red7',
                        7 => 'red8',
                        8 => 'red9',

                        9 => 'blue7',
                        10 => 'blue8',
                        11 => 'blue9',
                    ],
                ],
                'vertical' => [
                    '1' => [
                        0 => 'green1',
                        1 => 'green4',
                        2 => 'green7',

                        3 => 'yellow1',
                        4 => 'yellow4',
                        5 => 'yellow7',

                        6 => 'blue1',
                        7 => 'blue4',
                        8 => 'blue7',

                        9 => 'white1',
                        10 => 'white4',
                        11 => 'white7',
                    ],
                    '2' => [
                        0 => 'green2',
                        1 => 'green5',
                        2 => 'green8',

                        3 => 'yellow2',
                        4 => 'yellow5',
                        5 => 'yellow8',

                        6 => 'blue2',
                        7 => 'blue5',
                        8 => 'blue8',

                        9 => 'white2',
                        10 => 'white5',
                        11 => 'white8',
                    ],
                    '3' => [
                        0 => 'green3',
                        1 => 'green6',
                        2 => 'green9',

                        3 => 'yellow3',
                        4 => 'yellow6',
                        5 => 'yellow9',

                        6 => 'blue3',
                        7 => 'blue6',
                        8 => 'blue9',

                        9 => 'white3',
                        10 => 'white6',
                        11 => 'white9',
                    ],
                ]
            ]),
            'Created_at' => now()
        ]);
    }
}
