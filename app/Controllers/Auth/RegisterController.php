<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Chomsky\Cryptic\Hasher;
use Chomsky\Http\Controller;
use Chomsky\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request, Hasher $hasher)
    {
        $data=$request->validate(['email' => 'required|email', 'name' => 'required', 'password' => 'required', 'confirm_password' => 'required']);
        if(User::firstWhere('email',$data['email'])){
            return back()->withErrors(['email' => ["email"=>"Email already exists"]]);
        }
        if($data['password'] !== $data['confirm_password']) {
            return back()->withErrors(['confirm_password' => ["confirm_password"=>"Password doesn't match"]]);
        }
        $data["password"]=$hasher->hash($data['password']);
        
        User::create($data);
        $user=User::firstWhere('email',$data['email']);
        $user->login();
        return redirect('/');
    }
    public function create(){
            return view('auth/register');
    }
}
