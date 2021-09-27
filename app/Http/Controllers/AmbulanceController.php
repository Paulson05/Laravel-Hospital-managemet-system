<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.ambulance.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->all();
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'ambulance_type' => 'required',
            'ambulance_status' => "required",
            'ambulance_id' => 'required',
            'photo' => 'required'

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $ambulance = rand(1068901, 100000);
            $array=collect($request->only(['name','ambulance_id', 'ambulance_type', 'ambulance_status', 'photo']))->put('ambulance_number',$ambulance)->all();
            Ambulance::create($array);

//        $department->created_by = Auth::user()->id;


            return response()->json([
                'status' => 200,
                'message' => 'abmbulance added successfully',

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function show(Ambulance $ambulance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambulance $ambulance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambulance $ambulance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambulance $ambulance)
    {
        //
    }
}
