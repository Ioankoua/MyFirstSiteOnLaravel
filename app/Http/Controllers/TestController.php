<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;
use App\Models\Test;
use App\Models\Main_texts;

class TestController extends Controller
{
    public function test_page(){
        $test_text = new Main_texts;
        return view('main_pages.test_page.test', ['data' => $test_text->find(3)]);
    }

    public function qwestions()
    {
        return view('main_pages.test_page.qwestions');
    }

    public function good_result()
    {
        return view('main_pages.test_page.result_good');
    }

    public function bad_result()
    {
        return view('main_pages.test_page.result_bad');
    }
    
    public function result_submit(Request $req)
    {
    	$result = new Test();

        //Добавляем в базу даных
    	$qwe1 = $result->answer1 = $req->input('answer1');
    	$qwe2 = $result->answer2 = $req->input('answer2');
    	$qwe3 = $result->answer3 = $req->input('answer3');
    	$qwe4 = $result->answer4 = $req->input('answer4');
    	$qwe5 = $result->answer5 = $req->input('answer5');

        if (!empty($qwe1) && !empty($qwe2) && !empty($qwe3) && !empty($qwe4) && !empty($qwe5)) {

            $result->save();
            $lastid = $result->id;

            return TestController::get_result($lastid);
         
        }else{

        }
    }

    public function get_result($lastid)
    {
        $result = new Test();

        $id = $result->find($lastid);

        function match($id)
        {
            $a1 = $id['answer1'];
            $a2 = $id['answer2'];
            $a3 = $id['answer3'];
            $a4 = $id['answer4'];
            $a5 = $id['answer5'];

            return $point = $a1 + $a2 + $a3 + $a4 + $a5;
        }

        $points = match($id);

        return TestController::print_result($points);
    }

    public function print_result($points)
    {
        if ($points > 13) {
            return redirect()->route('good');
        }else{
            return redirect()->route('bad');
        }
        
    }

}
