<?php

namespace App\Http\Controllers;

use App\Instagram;

class InstagramController extends Controller
{
    private $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Instagram $instagram)
    {
       $this->model = $instagram;
    }

    public function getAll($id, $mes =0 ) 
    {
        if($mes == 0) {
            $dados = $this->model::where('profile_id','=', $id)->get();
        }else {
            $dados = $this->model::where('profile_id','=', $id)
            ->whereMonth('date', '=', $mes)
            ->get();
        }
        return \response()->json($dados);
        
    }
}
