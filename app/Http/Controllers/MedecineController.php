<?php

namespace App\Http\Controllers;

use App\Models\Medecine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedecineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.medicine.index');
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

    public function store(Request $request)
    {
        $request->all();
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'price'=>  'required',
            'expire_date' => 'required',
            'qty' => 'required',
            'alert_stock' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $product_code = rand(106890128, 100000000);
            $array=collect($request->only(['name','price', 'expire_date', 'qty', 'status', 'description','alert_stock']))->put('product_code',$product_code)->all();
           Medecine::create($array);

//        $supplier->created_by = Auth::user()->id;



            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function show(Medecine $medecine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medecine $medecine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medecine $medecine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medecine $medecine)
    {
        //
    }
}
