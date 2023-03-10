<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa2;
use Illuminate\Support\Facades\Auth;

class Mahasiswa2Controller extends Controller
{
    public function index()
{
    $data = mahasiswa2::all();
    return view('mahasiswa.mahasiswa2', ['data' => $data])->with([
        'user' => Auth::user(),
    ]);
}
}