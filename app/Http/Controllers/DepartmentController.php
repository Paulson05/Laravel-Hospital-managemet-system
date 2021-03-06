<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('backend.department.index');
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

        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'description'=>  'required',
            'status' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $supplier = new Department();
            $supplier->name = $request->name;
            $supplier->status = $request->status;
            $supplier->description = $request->description;
//        $supplier->created_by = Auth::user()->id;
            $supplier->save();

            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);
        }


    }
    public function fetchDepartment(){
        $deparments = Department::all();
        return response()->json([
            'deparments'=>$deparments,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $supplier =Supplier::find($id);

        if ($supplier)
        {
            return response()->json([
                'status' => 200,
                'supplier' => $supplier,

            ]);
        }
        else{
            return response()->json([
                'status' => 200,
                'message' => 'supllier added succesfully',

            ]);
        }
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email'=>  'required',
            'mobile_no' => 'required',
            'address' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }else{
            $supplier = Supplier::find($id);
            $supplier->name = $request->name;
            $supplier->email = $request->email;
            $supplier->mobile_no= $request->mobile_no;
            $supplier->address = $request->address;
//        $supplier->created_by = Auth::user()->id;
            $supplier->update();

            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);
        }
    }

    public function destroy($id)
    {
        $post = Supplier::find($id);
        $post->delete();
        return response()->json([
            'status' => 200,
            'message' => 'post deleted successfully',

        ]);
    }
}
