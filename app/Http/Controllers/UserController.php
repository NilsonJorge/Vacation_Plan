<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\HolidayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   

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
            return  redirect()->action([HolidayController::class, 'index']);
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
