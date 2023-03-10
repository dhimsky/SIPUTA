@extends('layout.main')

@section('isi')

<!-- START DATA -->

<div class="my-3 p-3 bg-body rounded shadow-sm">
   
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2 class="text-center mb-4">
            Data Mahasiswa
        </h2>
    </div>
    
    <!-- FORM PENCARIAN -->


    <!-- TOMBOL TAMBAH DATA -->
    

    <table class="table table-striped">
        <thead>
            <tr>
              
                <th class="col-md-3">NIM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-2">Semester</th>
                <th class="col-md-2">No.Hp</th>
                <th class="col-md-2">Alamat</th>
              
            </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $item)
            <tr>
                
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->semester }}</td>
                <td>{{ $item->nohp }}</td>
                <td>{{ $item->alamat }}</td>
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
    
</div>
<!-- AKHIR DATA -->

@endsection
