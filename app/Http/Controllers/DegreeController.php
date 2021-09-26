<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DegreeController extends Controller
{
    public function index()
    {
        return view ('backend.degree.index');
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

        ]);


        return response()->json([
            'status' => 200,
            'message' => 'post added successfully',

        ]);

    }
    public function  fetchUnit(){
        $units = Unit::all();
        return response()->json([
            'units'=>$units,
        ]);
    }

    public function show(unit $unit)
    {
        //
    }


    public function edit($id)
    {

        $unit =Unit::find($id);

        if ($unit)
        {
            return response()->json([
                'status' => 200,
                'unit' => $unit,

            ]);
        }
        else{
            return response()->json([
                'status' => 200,
                'message' => 'unit added succesfully',

            ]);
        }
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $unit =  Unit::find($id);
            $unit->name = $request->name;

//        $department->created_by = Auth::user()->id;
            $unit->update();

            return response()->json([
                'status' => 200,
                'message' => 'unit added successfully',

            ]);
        }
    }

    public function destroy($id)
    {
        $post = Unit::find($id);
        $post->delete();
        return response()->json([
            'status' => 200,
            'message' => 'post deleted successfully',

        ]);
    }
}
