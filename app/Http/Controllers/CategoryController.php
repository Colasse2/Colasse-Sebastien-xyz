<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $category = (new \App\Models\Category)->getAllCategories('tracks')->get();
        return view('app.categories.index', compact('category'));
    }


}
