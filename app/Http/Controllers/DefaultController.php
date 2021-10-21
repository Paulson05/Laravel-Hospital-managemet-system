<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Product;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function findPatientName(Request $request){

        $data = Patient::select('name', 'id')->where('visiting_doctor', $request->id)->take(100)->get();

        return response()->json($data);
    }
    public function findEmail(Request  $request){
        $email = Patient::select(['email','patient_number','department_id', 'symptoms'])->with(['depts'])->where('id', $request->id)->first();

        return  response()->json($email);
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
