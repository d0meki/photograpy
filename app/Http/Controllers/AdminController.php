<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Administrador;
use App\Negocio;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminController extends Controller
{
    public function loginVista() {

        return view('login');
    }

    public function login(Request $request){

        $credentials=$this->validate(request(),
        ['email'=>'required|string',
        'password'=>'required|string']);



        if (FacadesAuth::guard('administrador')->attempt($credentials)){ 
            return redirect()->intended('/menuAdministrador');
        }

        return back()
        ->withErrors(['email'=>'Estas credenciales no concuerdan con nuestros registros.'])
        ->withInput(request(['email']));       
    }

    public function logout(){
        FacadesAuth::guard('administrador')->logout();
        return redirect('/');
}


 
    public function welcome(){

        $empresas= Negocio::get();
        
        return view('welcome',compact('empresas'));
    }

}
