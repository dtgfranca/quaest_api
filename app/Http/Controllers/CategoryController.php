<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    private $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
       $this->model = $category;
    }

    public function getAll() 
    {
        $categories = $this->model->all();
        return \response()->json($categories);
        
    }
}
