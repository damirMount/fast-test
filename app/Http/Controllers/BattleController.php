<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Character;
use App\Services\Battle;

class BattleController extends Controller
{


    public function index()
    {
        return view('battle.battle');
    }

    public function start(Request $request)
    {
        $character1 = $request->chars[0];
        $character2 = $request->chars[1];
        $character1 = new Character($character1[0]['value'], $character1[1]['value'], $character1[2]['value']);
        $character2 = new Character($character2[0]['value'], $character2[1]['value'], $character2[2]['value']);

        $battle = new Battle($character1, $character2);
        $result = $battle->start();

        return response()->json(['result' => $result->getResult(), 'winner' => $result->getWinner(), 'looser' => $result->getLooser()]);
    }
}
