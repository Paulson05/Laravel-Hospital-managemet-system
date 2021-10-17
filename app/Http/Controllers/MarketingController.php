<?php

namespace App\Http\Controllers;

use App\DataTables\marketerDataTable;
use App\Models\Marketing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(marketerDataTable $dataTable)
    {
        $marketer = Marketing::all();
        return  view('backend.marketing.index', [ 'marketer' => $marketer]);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->all();
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone_number' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else
            $array=collect($request->only(['name','phone_number']))->all();
            Marketing::create($array);

//        $department->created_by = Auth::user()->id;


            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);

    }
    public function  fetchMarketer(){
        $marketing = Marketing::all();
        return response()->json([
            'marketing'=>$marketing,
        ]);
    }
    function getdata()
    {
        $data=Marketing::select('name','id');
        return Datatables::of($data)->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function show(Marketing $marketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketing $marketing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marketing $marketing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketing $marketing)
    {
        //
    }
}
