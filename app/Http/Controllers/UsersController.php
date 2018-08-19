<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(Request $request){
//        $validator=Validator::make($request->all(),[
//            'userName' => 'required',
//            $email = 'email' => 'required|email',
//            'password' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json('کاربر گرامی لطفا مقادیر مورد نظر را کامل نمایید', 400);
//        }
//        if ($request->email == $email) {
//            return response()->json('کاربر گرامی این ایمیل وجود دارد', 400);
//        }
//        User::create(array(
//        'email'=>$request->email,
//            'name'=>$request->name,
//            'password'=>bcrypt($request->password),
//    ));
//        return redirect('auth.register');
    }

    public function add(Request $request)
    {
        $user=array(
             $request->email=>'email' ,
             $request->userName=>'userName' ,
             Hash::make($request->password)=>'password');
        User::create($user);
//        return view('auth/register');
    }
    public function index(Request $request,$name)
    {
//        $name=Request::input('search');
        $search=Contacts::where('name','like','%'.$name.'%');
//        return view('contact.view')->with('search',$search);
        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }

    public function destroy($id)
    {
        $con=Contacts::findOrFail($id);
        return $con;
//        $con->delete();
//        return back();
    }
}