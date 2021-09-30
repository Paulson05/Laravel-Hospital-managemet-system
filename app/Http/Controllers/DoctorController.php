<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{ public function index()
{

    return view('backend.doctor.index');
}


    public function getLogin(){
      return view('backend.doctor.login');
    }
    public function postLogin(Request $request)
    {
        $cred = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($cred)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.getlogin');
        }
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
            'username'=>  'required',
            'email' => 'required',
            'specialist' => "required",
            'address' => 'required',
            'gender' => 'required',
            'D_O_B' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'status' => 'required'

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $employer_id = rand(106890128, 100000000);
            $array=collect($request->only(['name','username', 'email', 'specialist', 'address', 'gender', 'D_O_B', 'country', 'phone', 'degree', 'description', 'photo']))->put('employer_id',$employer_id)->all();
            Doctor::create($array);

//        $department->created_by = Auth::user()->id;


            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);
        }
    }
    public function  fetchProduct(){
        $products = Product::all();
        return response()->json([
            'products'=>$products,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::find($id);

        if ($product) {
            return response()->json([
                'status' => 200,
                'doctor' => $product,

            ]);
        } else {
            return response()->json([
                'status' => 200,
                'message' => 'doctor added succesfully',

            ]);
        }
    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $post = Product::find($id);
        $post->delete();
        return response()->json([
            'status' => 200,
            'message' => 'post deleted successfully',

        ]);
    }

    public function getProductCode(){
        $productBarCode = Product::select('barcode','product_code' )->get();
        return view('backend.doctor.productbarcode')->with([
            'productBarCode' =>  $productBarCode
        ]);
    }
}
