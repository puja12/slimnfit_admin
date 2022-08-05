<?php

namespace App\Http\Controllers;
use App\Models\Food;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        return view('food.listfood',[
            //'listings' => Food::latest()->filter(request(['tag','search']))->paginate(4)
            //'listings' => Food::latest()->paginate(4)
            'listings' => Food::orderBy('name', 'asc')->get()
        ]);
    }

    public function create(){
        return view('food.addfood');
    }
}
