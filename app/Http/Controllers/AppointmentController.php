<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = \App\Models\Appointment::with(['series'])->orderBy('date', 'desc')->get();

        return view('backend.patient-appointment.index', [  'invoices'=> $invoices]);
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
public function approvedList(){

        return view('backend.patient-appointment.approved_list');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getStore(Request $request)
    {


        $validator = Validator::make($request->all(),[
            'patients_id' => 'required',
            'serials_id' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'doctors_id' => 'required',
            'departments_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }

        else
            $array=collect($request->only(['name','phone_number', 'number', 'patients_id','serials_id','email','doctors_id','departments_id','date','time','message' ]))->all();
       Appointment::create($array);

//        $department->created_by = Auth::user()->id;


        return response()->json([
            'status' => 200,
            'message' => 'post added successfully',

        ]);

    }

    public function  fetchPatientAppointment(){
        $appointment = Appointment::all();
        return response()->json([
            'appointment'=> $appointment,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function approve($id){

        $invoice = Appointment::find($id);
            DB::table('patients_appointments')->where('id', $id)->update(['status' => 1]);

        return redirect()->route('doctor.approved.list');
    }
}
