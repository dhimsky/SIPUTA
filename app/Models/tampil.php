<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tampil extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','jurusan','semester','nohp','alamat'];
    protected $table = 'mahasiswa';
    public $timestamps = false;
    
}