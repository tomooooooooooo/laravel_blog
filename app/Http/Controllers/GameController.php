<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function omikuji()
    {
    $fortunes = ['大吉', '中吉', '小吉', '吉', '末吉', '凶', '大凶'];
    $resultIndex = array_rand($fortunes);
    $result = $fortunes[$resultIndex];
    return view('omikuji', ['result' => $result]);
}
}