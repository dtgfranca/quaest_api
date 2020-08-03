<?php

namespace App\Http\Controllers;

use App\Twitter;

class TwitterController extends Controller
{
    private $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Twitter $twitter)
    {
       $this->model = $twitter;
    }

    public function getAll($id, $mes=0) 
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
