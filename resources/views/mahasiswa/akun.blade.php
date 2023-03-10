@extends('layout.main')

@section('isi')
<div class="my-3 p-3 bg-body rounded shadow-sm">
   
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2 class="text-center mb-4">
            Data Akun
        </h2>
    </div>
    
    <!-- FORM PENCARIAN -->


    <!-- TOMBOL TAMBAH DATA -->
    

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-3">Nama</th>
                <th class="col-md-3">Email</th>
                <th class="col-md-3">Username</th>
                <th class="col-md-3">Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->password }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</div>

@endsection
