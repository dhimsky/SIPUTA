@extends('layout.template')
@section('konten')

    <!-- START FORM -->
    <form action='{{ url('manage/'.$data->nim) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('manage') }}' class="btn btn-dark btn-sm"><<</a>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h2 class="text-center mb-4">
                    Ubah Data
                </h2>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    {{ $data->nim }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan}}" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='semester' value="{{ $data->semester}}" id="semester">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">No.Hp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nohp' value="{{ $data->nohp}}" id="nohp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' value="{{ $data->alamat}}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-success btn-sm" name="submit">Simpan</button>
                </div>
            </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection