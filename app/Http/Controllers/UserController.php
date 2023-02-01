<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TurmasController;

class UserController extends Controller
{
    public function login()
    {
        return view('welcome');

    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'password' => 'required'
        ],[
            'name.required' => 'Usuário é obrigatório',
            'password.required' => 'Senha é obrigatória',
        ]);
        if(Auth::attempt(['name'=> $request->name,'password'=> $request->password])){
            return  redirect()->action([TurmasController::class, 'index']);
        }else{
            return redirect()->back()->with('danger','Usuário ou senha inválida');
        }

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logout');
    }

    
}
