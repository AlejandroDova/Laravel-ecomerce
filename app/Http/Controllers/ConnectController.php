<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ConnectController extends Controller
{   

    public function __construct(){
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin(){
        return view('connect/login');
    }

    public function getRegister(){
        return view('connect/register');
    }

    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()): 
            return back()->withErrors($validator) -> with('message','Se ha producido un error');
        else:
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]
            ,true)):
                return redirect('/'); 
            else:
                return back()->with('message','Correo electronico o contraseña incorrecta')->with('typealert','danger');
            endif;
        endif;
    }

    public function postRegister(Request $request){
        $rules = [ 
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:App\User,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ];

        $messages = [
            'name.required' => 'Su nombre es requerido.',
            'lastname.required' => 'Su apellido es requerido.',
            'email.required' => 'Su email es requerido.',
            'email.email' => 'El formato de su correo electrónico es inválido.',
            'email.unique' => 'Ya existe un usuario registrado con este correo.',
            'password.required' => 'Su contraseña es requerida.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'cpassword.required' => 'Su confirmacion de contraseña es requerida.',
            'cpassword.min' => 'La confirmacion debe tener al menos 8 caracteres.',
            'cpassword.same' => 'Las contraseñas no coinciden.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()): 
            return back()->withErrors($validator) -> with('message','Se ha producido un error');
        else:
            $user = new User;
            $user -> name = e($request->input('name'));
            $user -> lastname = e($request->input('lastname'));
            $user -> email = e($request->input('email'));
            $user -> password = Hash::make($request->input('password'));

            if($user->save()): 
                return redirect('/login')->with('message','Su usuario se creó 
                correctamente.')->with('typealert', 'success');
            endif;
        endif;
    } 
    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}