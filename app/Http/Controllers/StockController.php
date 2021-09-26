<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StockController extends Controller
{
    public function index(){

        return view('backend.stocks.index');
    }

    public function store(Request $request)
    {
        $request->all();
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'qty'=> 'required',
            'price'=> 'required',
            'stock_type' => 'required'

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $array=collect($request->only(['name','price','stock_type', 'qty']))->all();
            Stock::create($array);

//        $department->created_by = Auth::user()->id;


            return response()->json([
                'status' => 200,
                'message' => 'stock added successfully',

            ]);
        }


    }
}



