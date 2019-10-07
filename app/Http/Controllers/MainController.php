<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    function index(){
        return view('login');
    }

    function checklogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('main/successlogin');
        }else{
            return back()->with('error','Email ou senha incorreta');
        }
    }

    function successlogin(){
        return view('successlogin');
    }

    function logout(){
        Auth::logout();
        return view('login');
    }

    function create(){
        return view('create');
    }

    function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            ]);
        
        auth()->login($user);
        
        return redirect()->to('main/successlogin');
    }
}
