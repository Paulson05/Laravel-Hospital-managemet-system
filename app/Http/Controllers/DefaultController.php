<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Product;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function getName(Request $request){
dd($request->all());
        $patient_name = $request->patients_id;
        dd($patient_name);
        $allpatient = Appointment::where('id')->all();
//        $allpatient = Appointment::with(['category'])->select('category_id')->where('suppliers_id',$patient_name)->groupBy('category_id')->get();

        dd($allpatient );
        return response()->json($allpatient);
    }

    public function getProduct(Request $request){

        $category_id = $request->category_id;
        $allProduct = Product::where('category_id', $category_id)->get();

        return response()->json($allProduct);
    }

    public function getStock(Request $request){

         $product_id = $request->products_id;
         $stock = Product::where('id', $product_id)->first()->quantity;
//         dd($stock);
         return response()->json($stock);
    }
}
