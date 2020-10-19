<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class calcsController extends Controller
{



    public function show($num1, $calcs, $num2) {


     $data = ['num1' => $num1, 
               'calcs' => $calcs,
              'num2' => $num2,];


    return view('message.show', $data);

    
}
    public function aaa($answer)
    {
        $answer = 1;
        return view(($answer));
// return view()
//         if ($calcs == 'addition') {
//             $answer = $num1 + $num2;
//         }

    }
    
}

// public function hello()
//     {
//         $msg = 'Hello from controller';
//         // viewにデータを渡す場合は第2引数に連想配列で渡す
//         return view('message.hello', ['msg' => $msg]);
//     }
//     public function show($name, $msg, $weather)
//     {
//         return view('message.show.weather', [
//             'name' => $name,
//             'msg' => $msg,
//             'weather' => $weather
            
//             ]);
//     }