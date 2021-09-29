<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                 return  view('backend.patients.index');
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
            'occupation'=>  'required',
            'email' => 'required',
            'current_address' => "required",
            'relative_name' => 'required',
            'gender' => 'required',
            'permanent_address' => 'required',
            'relative' => 'required',
            'visiting_doctor' => 'required',
            'photo' => 'required',
            'patient_number' => 'required',
            'floor_bed' => 'required',
             'd_o_b' => 'required',
            'home_phone' => 'required',
            'blood_group' => 'required',
            'religion' => 'required',
            'patient_type' => 'required',
            'symptoms' => 'required'

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{

            $array=collect($request->only(['name','occupation','phone', 'relative', 'gender',  'blood_group', 'patient_number',  'email',  'permanent_address', 'relative_name', 'current_address', 'symptoms', 'patient_type', 'religion', 'home_phone', 'd_o_b', 'floor_bed','visiting_doctor', 'photo']))->all();
            Patient::create($array);

//        $department->created_by = Auth::user()->id;


            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
