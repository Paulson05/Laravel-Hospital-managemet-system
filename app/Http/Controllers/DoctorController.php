<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{ public function index()
{

    return view('backend.doctor.index');
}
public  function doctorDashboard(){
    $invoices = \App\Models\Appointment::with(['series'])->where('status', '0')->get();
    return view('backend.doctor.dashboard', [  'invoices'=> $invoices]);
}

public function allApprovedList(){

    return view('backend.doctor.approved_list');
}
    public function allPendingList(){

        return view('backend.doctor.pending_list');
    }
    public function profile(){
        return view('backend.doctor.profile');
    }
public  function doctorRegister(){

    return view('backend.doctor.register');
}

    public function postRegister(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'specialist' => "required",
            'address' => 'required',
            'gender' => 'required',
            'D_O_B' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'status' => 'required',
            'departments_id' => 'required'
        ]);


        $employer_id = rand(106890128, 100000000);
        $array=collect($request->only(['name', 'departments_id', 'email', 'specialist', 'address', 'gender', 'D_O_B', 'country', 'phone', 'degree', 'description', 'photo']))->put('password',bcrypt($request->password))->put('employer_id',$employer_id)->all();
        User::create($array);
        return redirect()->route('doctor.login');

    }

    public function postEdit(Request $request)

    {


       auth()->user()->update([
           'name' => $request->input( 'name'),
           'email' => $request->input('email'),
           'address' => $request->input( 'address'),
           'phone' => $request->input('phone'),
       ]);
      return redirect()->route('doctor.profile');
    }

    public function getLogin(){
      return view('backend.doctor.login');
    }
    public function postLogin(Request $request)
    {
        $cred = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($cred)) {
            return redirect()->route('doctor.dashboard');
        } else {
            return redirect()->back();
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
            'status' => 'required',
             'departments_id' => 'required'

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $employer_id = rand(106890128, 100000000);
            $array=collect($request->only(['name','username',  'departments_id', 'email', 'specialist', 'address', 'gender', 'D_O_B', 'country', 'phone', 'degree', 'description', 'photo']))->put('employer_id',$employer_id)->all();
            Doctor::create($array);

//        $department->created_by = Auth::user()->id;


            return response()->json([
                'status' => 200,
                'message' => 'post added successfully',

            ]);
        }
    }
    public function  fetchDoctor(){
        $doc = Doctor::all();
        return response()->json([
            'doc'=>$doc,
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


    public function getEdit()
    {
      return view('backend.doctor.edit');
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
