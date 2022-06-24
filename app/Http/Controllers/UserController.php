<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json("not working");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.sign_up");
    }

    public function verifyOtpCreate(Request $request)
    {
        $credentials = $request->validate([
            "name" => ["required"],
            "email" => ["required"],
            "phone_num" => ["required"],
            "password" => ["required"],

        ]);
        $otp = rand(99999, 999999);
        if (Mail::to($request["email"])->send(new EmailVerification($otp))) {
            session(["hashedOtp" => Hash::make($otp),"data"=>$credentials]);
            return view("auth.verify_otp");
       };
    }
    public function verifyOtpVerify(Request $request){
        
        $otp = $request["otp"];
        if($request->session()->has("hashedOtp")){
            if(Hash::check($otp,session("hashedOtp"))){
                return redirect("/user/store");
            }
            return response()->json("not working");
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = session("data");
        $result = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "phone_num" => $data["phone_num"],
            "password" => Hash::make($data["password"]),
        ]);
        if (isset($result["id"]) ){
            return redirect("/");
        }
        return redirect()->back()->with(["Error"=>"Data is invalid"]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect("/");
        }
        return redirect()->back()->withErrors("failed");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
