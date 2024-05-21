<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    // LOGIN ADMIN
    public function login_process_admin(Request $request){
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);
        
        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];
        
        if (Auth::attempt($data)){
            $request->session()->regenerate();

            // Redirect berdasarkan role
            $user = Auth::user();
            if ($user->role->name == 'admin') {
                return redirect()->intended('/admin/dashboard');
            }else{
                return redirect()->back()->with('failed', 'failed login');
            }
        }else{
            return redirect()->back()->with('failed', 'failed login');
        }
    }
    
    // LOGIN OPERATOR
    public function login_process_operator(Request $request){
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);
        
        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];
        
        if (Auth::attempt($data)){
            $request->session()->regenerate();

            // Redirect berdasarkan role
            $user = Auth::user();
            if ($user->role->name == 'operator') {
                return redirect()->intended('/operator/dashboard');
            }else{
                return redirect()->back()->with('failed', 'failed login');
            }
        }else{
            return redirect()->back()->with('failed', 'failed login');
        }
    }
    
    // LOGIN OFFICER
    public function login_process_officer(Request $request){
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);
        
        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];
        
        if (Auth::attempt($data)){
            $request->session()->regenerate();

            // Redirect berdasarkan role
            $user = Auth::user();
            if ($user->role->name == 'officer') {
                return redirect()->intended('/officer/dashboard');
            }else{
                return redirect()->back()->with('failed', 'failed login');
            }
        }else{
            return redirect()->back()->with('failed', 'failed login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna

        $request->session()->invalidate(); // Invalidasi sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect('/'); // Arahkan ke halaman utama atau halaman lain yang diinginkan
    }
}