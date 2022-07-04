<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function position(Request $request)
    {
        $data = $request->all();

        $direction = $data['direction'];
        $orientation = $data['orientation'];
        $row = $data['row'];

        $game = Game::orderBy('created_at', 'desc')->first();

        $matrix = $game->position;

        $array_to_rotate = $matrix[$orientation][$row];

        if ($direction == "left") {
            for ($i = 0; $i < 3; $i++) {
                $new_value = $array_to_rotate[$i];
                unset($array_to_rotate[$i]); // remove item at index 0
                array_push($array_to_rotate, $new_value);
            }
            $array_to_rotate = array_values($array_to_rotate); // 'reindex' array
        } else {
            for ($i = 0; $i < 9; $i++) {
                $new_value = $array_to_rotate[$i];
                unset($array_to_rotate[$i]); // remove item at index 0
                array_push($array_to_rotate, $new_value);
            }
            $array_to_rotate = array_values($array_to_rotate); // 'reindex' array
        }

        $matrix[$orientation][$row] = $array_to_rotate;

        $new_game = Game::create(['position' => $matrix]);

        return $new_game;
    }

    public function game($id) {
        return Game::where('id', $id)->first();
    }
}
