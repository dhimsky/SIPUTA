<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akun;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function tampilkanTabel()
{
    $data = akun::all();
    return view('mahasiswa.akun', ['data' => $data])->with([
        'user' => Auth::user(),
    ]);
}

}