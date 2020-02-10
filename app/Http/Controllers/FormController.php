<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Webpatser\Uuid\Uuid;

class FormController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }

    public function secondpage(Request $r){
        return view('second');
    }

    public function admin_second(Request $r){
        $this->validate($r,[
            'name' => 'required',
            'password' => 'required',
        ]);
        if($r->name=="admin" && $r->password=="admin"){
            return view('second_page');
        }else{
            return view('second');
        }
    }

    public function thirdpage(Request $r){
        $this->validate($r,[
            'design' => 'required',
            'size' => 'required',
            'color' => 'required',
            'checkpoint' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        $uuid = Uuid::generate()->string;

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->custome_data($r->name,$uuid,$r->design,$r->size,$r->color,$r->checkpoint,$r->phone_number));
        return $pdf->stream();

        //     // return view('third');
        // return $r->design.$r->size.$r->color.$r->checkpoint;
    }

    public function custome_data($name,$uuid,$design,$size,$color,$checkpoint,$phone_num){
        $account_name = 'Simplex advertising'.$name;
        $account_number = '1000121212121';
        $id = '1223xma12ewxae12e';
        $output = '<center><h3>Simplex Advertising</h3></center><h3>hello dear customer please use the infos below</h3><br><h2>'.$account_name
                    .'</h2><br><h2>'.$account_number.'<h2><br><h2>'.$uuid.'</h2>'.$design.'<h2><br><h2>'.$size.'</h2>'
                    .$color.'<h2><br><h2>'.$checkpoint.'</h2>'.$phone_num.'<h2><br><h2>';
        return $output;
    }
}
