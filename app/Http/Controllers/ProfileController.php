<?php

namespace App\Http\Controllers;

use App\Profile;

class ProfileController extends Controller
{
    private $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Profile $profile)
    {
       $this->model = $profile;
    }

    public function getAll($id) 
    {
        $profiles = $this->model::where('category_id', '=', $id)->get();
        return \response()->json($profiles);
        
    }
}
