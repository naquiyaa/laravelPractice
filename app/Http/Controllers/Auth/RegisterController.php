<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //this could be done in the web.php file as we are returning the view, but we want to keep everything clean and maintained
    public function index(){
        return view('auth.register');
    }
    //request object will contain all info of the request including what we have submitted
    public function store(Request $request){
        //dd function kills the page and output whatever we want
        // dd('abc');
        //validate user
        //sign the user in
        //redirect
        // dd($request->email);
        $this->validate($request, [
        //i can also write the validation rules in square brackets, this is needed when creating
        //our own validation rules and not using the ones given by the Validatory method
        'name'=> 'required|max:255',
        'username' => 'required|max:255',
        'email' => 'required|email|max:255',
        //the confirmed word here will check any data we have submitted with the underscore confirmed name and if we have it'll match the two data values
        'password' => 'required|confirmed',
        ] );


    }
}
