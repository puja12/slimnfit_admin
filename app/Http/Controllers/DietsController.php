<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Diet;
use App\Models\Meal;
use App\Models\Mealtime;
use App\Models\Food;
use App\Models\food_unit;
use Illuminate\Http\Request;

class DietsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diets = Diet::all();
        //dd($diets);
        return view('dietplan.dietplanlist',['diets'=> $diets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dietplan.createdietplan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd(request()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function show($plan_id)
    {
        //DB::enableQueryLog();
        //dd($plan_id);
        $dietplan_details = Meal::where('plan_id', $plan_id)->get();
       // dd(DB::getQueryLog());
        //dd($dietplan_details);exit;
        return view('dietplan.dietplandetail',['dietplan_details'=> $dietplan_details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diet $diet)
    {
        //
    }
}
