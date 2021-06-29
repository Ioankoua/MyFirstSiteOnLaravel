<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main_texts;
use App\HTTP\Controllers\CookieController;

class MainController extends Controller
{
    public function hello(){
        return view('main_pages.other.hello');
    }  

    public function main_page(){
    	$lib_text = new Main_texts;
        return view('main_page', ['data' => $lib_text->find(1)]);
    }      

    public function history_page(){
        $history_text = new Main_texts;
    	return view('main_pages.history_page.history', ['data' => $history_text->find(2)]);
    }

    public function game_page(){
    	return view('main_pages.game_page.game');
    }

    public function chess_page(){
        return view('main_pages.game_page.chess.chess');
    }

    public function button_game_page(){
    	return view('main_pages.game_page.button_game.but_game');
    }

    public function gameover(){
        return view('main_pages.game_page.button_game.scrimer');
    }

}
