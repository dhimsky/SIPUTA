@extends('layout.main')

@section('isi')
<div class="my-3 p-3 bg-body rounded shadow-sm">
   
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2 class="text-center mb-4">
            Daftar Mahasiswa
        </h2>
    </div>
    
    <!-- FORM PENCARIAN -->


    <!-- TOMBOL TAMBAH DATA -->
    

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">Nama</th>
                <th class="col-md-1">Jurusan</th>
                <th class="col-md-1">Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->semester }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
