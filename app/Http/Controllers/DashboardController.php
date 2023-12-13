<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $mobil = Mobil::all()->count('id');
        $user = User::all()->count('id');
        return view('dashboard.index',compact('mobil','user'));
    }
}
