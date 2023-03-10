<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa2 extends Model
{
    use HasFactory;
    protected $fillable = ['nama','jurusan','semester'];
    protected $table = 'mahasiswa';
    public $timestamps = false;
}