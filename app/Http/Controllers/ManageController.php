<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class ManageController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = mahasiswa::where('nim','like',"%$katakunci%")
            ->orwhere('nama','like',"%$katakunci%")
            ->orwhere('jurusan','like',"%$katakunci%")
            ->orwhere('semester','like',"%$katakunci%")
            ->orwhere('nohp','like',"%$katakunci%")
            ->orwhere('alamat','like',"%$katakunci%")
            ->paginate($jumlahbaris);
        }else{
            $data = mahasiswa::orderBy('nim','desc')->paginate($jumlahbaris);
        }
        return view('mahasiswa.manage')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       \Illuminate\Support\Facades\Session::flash('nim',$request->nim);
       \Illuminate\Support\Facades\Session::flash('nama',$request->nama);
       \Illuminate\Support\Facades\Session::flash('jurusan',$request->jurusan);
       \Illuminate\Support\Facades\Session::flash('semester',$request->semester);
       \Illuminate\Support\Facades\Session::flash('nohp',$request->nohp);
       \Illuminate\Support\Facades\Session::flash('alamat',$request->alamat);

        $request->validate([
            'nim'=>'required|numeric|unique:mahasiswa,nim',
            'nama'=>'required',
            'jurusan'=>'required',
            'semester'=>'required|numeric',
            'nohp'=>'required|numeric',
            'alamat'=>'required',
        ],[
            'nim.required'=>'NIM wajib diisi',
            'nim.numeric'=>'NIM wajib dalam angka',
            'nim.unique'=>'NIM yang diisikan sudah ada',
            'nama.required'=>'Nama wajib diisi',
            'jurusan.required'=>'Jurusan wajib diisi',
            'semester.required'=>'Semester wajib diisi',
            'semester.numeric'=>'Semester wajib dalam angka',
            'nohp.required'=>'No.Hp wajib diisi',
            'nohp.numeric'=>'No.Hp wajib dalam angka',
            'alamat.required'=>'Alamat wajib diisi',
        ]);
        $data = [
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'jurusan'=>$request->jurusan,
            'semester'=>$request->semester,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
        ];
        mahasiswa::create($data);
        return redirect()->to('manage')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mahasiswa::where('nim',$id)->first();
        return view('mahasiswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'jurusan'=>'required',
            'semester'=>'required|numeric',
            'nohp'=>'required|numeric',
            'alamat'=>'required',
        ],[
            'nama.required'=>'Nama wajib diisi',
            'jurusan.required'=>'Jurusan wajib diisi',
            'semester.required'=>'Semester wajib diisi',
            'semester.numeric'=>'Semester wajib dalam angka',
            'nohp.required'=>'No.Hp wajib diisi',
            'nohp.numeric'=>'No.Hp wajib dalam angka',
            'alamat.required'=>'Alamat wajib diisi',
        ]);
        $data = [
            'nama'=>$request->nama,
            'jurusan'=>$request->jurusan,
            'semester'=>$request->semester,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
        ];
        mahasiswa::where('nim',$id)->update($data);
        return redirect()->to('manage')->with('success','Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mahasiswa::where('nim', $id)->delete();
        return redirect()->to('manage')->with('success', 'Berhasil menghapus data');
    }
}