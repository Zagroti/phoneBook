<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search=$request->input('search');
        $contact=Contacts::orderBy('name','desc')
            ->orWhere('name','like','%'.$search.'%')
            ->orWhere('email','like','%'.$search.'%')
            ->orWhere('mobileNumber','like','%'.$search.'%')
            ->orWhere('phoneNumber','like','%'.$search.'%')
            ->orWhere('address','like','%'.$search.'%')
            ->paginate(2);
        return view('contact.view')->with('contact',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('contact.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'mobileNumber'=>'required|digits:11',
            'phoneNumber'=>'required|digits:11',
            'address'=>'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

//        $user=auth()->user()->id;
//        $request->user_id = Auth::user()->id;
//        $request->save();
//       $user_id=Contacts::where('user_id',$user);
        Contacts::create([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'email'=>$request->email,
            'mobileNumber'=>$request->mobileNumber,
            'phoneNumber'=>$request->phoneNumber,
            'address'=>$request->address
        ]);
        return view('contact.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user_id=auth()->user()->id;
        $contact=Contacts::where('user_id',$user_id)->paginate(3);
        return view('contact.view')->with('contact',$contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contacts::find($id);
//        dd($contact);
        return view('contact.update')->with('contact',$contact);
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
        $validator= Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'mobileNumber'=>'required|digits:11',
            'phoneNumber'=>'required|digits:11',
            'address'=>'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $value=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'mobileNumber'=>$request->mobileNumber,
            'phoneNumber'=>$request->phoneNumber,
            'address'=>$request->address,
        );
        $contact=Contacts::where('id',$id)->update($value);
        return redirect()->back()->with('contact',$contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact= Contacts::where('id',$id)->firstOrFail();
        $contact->delete();
        return redirect()->back()->with('message','contact Delete Successfully!');
    }
//    public function destroy(Contacts $contact)
//    {
//        $contact->delete();
//        return redirect()->back()->with('message','contact Delete Successfully!');
//    }
}
