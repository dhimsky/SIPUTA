@extends('layout.main')

@section('judul')
    Beranda
@endsection

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Selamat datang , {{ $user->name }}</h3>

      <div class="card-tools">
        
      </div>
    </div>
    <div class="card-body">
      <div class="alert alert-success">
        Hallo selamat datang!
      </div>
    </div>
    <!-- /.card-footer-->
  </div>
@endsection