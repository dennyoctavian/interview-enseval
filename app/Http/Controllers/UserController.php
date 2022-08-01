<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => ['required', 'email', 'min:10', 'max:15'],
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
        ]);

        $user = User::all()->where('email', $request['email'])->first();

        if ($user == null) {
            return view('login', [
                'message' => "Username tidak ditemukan",
            ]);
        }

        if ($request['password'] !== $user->password) {
            return view('login', [
                'message' => "Password yang dimasukan salah",
            ]);
        }

        $salam = " ";
        $dt = new DateTime();

        if ($dt->format('H:i:s') >= strtotime("12:00:00") && $dt->format('H:i:s') < strtotime("18:00:00")) {
            $salam = "siang";
        } else if ($dt->format('H:i:s') >= strtotime("18:00:00")){
            $salam = "malam";
        } else {
            $salam = "pagi";
        }
        
        $name = explode("@", $user->email)[0];

        // $now = new DateTime("now");


        return view('welcome', [
            'name' => $name,
            'user' => $user,
            'salam' => $salam,
            'datetime' => $dt->format('Y-m-d H:i:s'),
            // 'now' => $now
        ]);
    }

    public function logout() {
        return view('login');
    }
}
