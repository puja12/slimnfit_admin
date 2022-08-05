<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\FitnessTracker;
use  App\Http\Requests\StoreClient;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
        $clients = Client::all();
        //return view('clients.list')->with('clients', $clients);
       // return view('clients.list',['clients'=> Client::all()]);
        return view('clients.list',['clients'=> $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.addclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClient $request)
    {
        $validated = $request->validated();
        //dd(request()->all());
        $client =  new Client(
            [   
                'first_name'        => $validated['first_name'],
                'last_name'        => $validated['last_name'],
                'email'         => $validated['email'],
                'gender'         => $validated['gender'],
                'address'  => $request->address,
                'city'  => $validated['city'],
                'state'        => $validated['state'],
                'pincode'   => $request->pincode,
                'phone'   => $request->phone,
                'dob'   => $request->dob,
                'age'   => $request->age,
                'medical_history'   => $validated['medical_history'],
                'diet_type'   => $validated['food_cat'],
                'no_of_meals'   => $validated['no_of_meals'],
                'major_meal'   => $validated['major_meal'],
                'glass_water'   => $validated['glass_water'],
                'tea_coffee'   => $validated['tea_coffee'],
                'sugar'  => $validated['sugar'],
                'cooking_oil' => $validated['cooking_oil'],
                'digestive_complaints' => $request->digestive_complaints,
                'eat_out' => $validated['eat_out'],
                'alcohol' => $validated['alcohol'],
                'smoke' => $validated['smoke'],
                'how_active' => $validated['how_active'],
                'followed_dietplan' => $validated['followed_dietplan'],
                'followed_dietplan_comment' => $request->followed_dietplan_comment,
            ]
        );
       
        $client->save();

        $client_fitness =  new FitnessTracker([  
            'client_id'=> $client->id,
            'date'=> date('Y-m-d'),
            'weight'=> $validated['weight'],
            'height'=> $validated['height'],
            'bmi'=> $validated['bmi'],
            'category'=> $validated['category'],
        ]);
        $client_fitness->save();
        $request->session()->flash('status','Client Created!!');
        return redirect()->route('showclient',['client'=> $client->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        //$client_detail = Client::findOrFail($id);
        $curr_client = Client::findOrFail($id);
        $fitness_tracker = Client::find($id)->fitness_tracker;
        $diet_plans = Client::find($id)->dietplans;
       // echo "<pre>";print_r($diet_plans);exit;
        //return view('clients.clientdetails',['curr_client'=> $client_detail]);
        return view('clients.clientdetails',compact('curr_client','fitness_tracker','diet_plans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
