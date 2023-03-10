<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\tampil;

class TampilController extends Controller
{
    public function index()
    {
        $data = tampil::all();
    return view('mahasiswa.tampil', ['data' => $data])->with([
        'user' => Auth::user(),
    ]);
    }
}