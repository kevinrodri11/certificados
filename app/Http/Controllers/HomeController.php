<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $people = Auth::user();
        switch ($people->id_roles) {
            case '2':
                return view('users.admins.index');
                break;

            case '1':
                $error = ['name'=>"423",'desc'=>"Locked"];
                $people = DB::table('people')->where('id_users', $people->id)->first();
                if ($people->doc == '1') {
                    return view('users.edit', compact('people')); 
                }
                else{
                    if ($people->id_contracts == '1'){
                        return view('home');
                    }
                    elseif($people->id_roles == '1'){
                        return view('auth.error', compact('error'));
                    }
                    else{
                        return view('users.index', compact('people'));
                    }
    
                }
                break;
            
            default:
            $people = DB::table('people')->where('id_users', $people->id)->first();
            break;
        }
    }
    public function historial()
    {
        return view('historial');
    }

    public function error()
    {
        return view('auth.error');
    }
}
