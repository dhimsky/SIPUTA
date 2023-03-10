@extends('layout.template')
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('home') }}' class="btn btn-dark btn-sm"><<</a>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2 class="text-center mb-4">
                Manage Data
            </h2>
        </div>
        <div class="pb-5">
            <a href='{{ url('mahasiswa/create') }}' class="btn btn-primary btn-sm" style="float:right">+ Tambah Data</a>
        </div>
        <div class="pb-3">
            <form class="d-flex" action="{{ url('manage')}}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-success" type="submit">Cari</button>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-5">Semester</th>
                <th class="col-md-6">No.Hp</th>
                <th class="col-md-7">Alamat</th>
                <th class="col-md-1">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->semester }}</td>
                <td>{{ $item->nohp }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href='{{ url('manage/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('manage/'.$item->nim) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
             
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
            
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
</div>
<!-- AKHIR DATA -->
@endsection