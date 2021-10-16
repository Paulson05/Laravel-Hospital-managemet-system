<?php

namespace App\Http\Controllers;

use App\Models\Seat_bed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SeatBedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('backend.bedseat.index');
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
            'seat_no'=> 'required',
            'floor_no'=>  'required',
            'rent' => 'required',
            'room' => 'required',
            'photo'  => 'required',
            'empty' => 'required',
            'type' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $array=collect($request->only(['seat_no','floor_no', 'rent', 'qty','room', 'photo','photo', 'type','empty']))->all();
            Seat_bed::create($array);

//        $supplier->created_by = Auth::user()->id;



            return response()->json([
                'status' => 200,
                'message' => 'seat details added successfully',

            ]);
        }
    }
    public function fetchSeat(){
        $seat = Seat_bed::all();
        return response()->json([
            'seat'=>$seat,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seat_bed  $seat_bed
     * @return \Illuminate\Http\Response
     */
    public function show(Seat_bed $seat_bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seat_bed  $seat_bed
     * @return \Illuminate\Http\Response
     */
    public function edit(Seat_bed $seat_bed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seat_bed  $seat_bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seat_bed $seat_bed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seat_bed  $seat_bed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seat_bed $seat_bed)
    {
        //
    }
}
