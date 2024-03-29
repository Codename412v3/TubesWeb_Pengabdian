<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['judul_jurnal', 'namapenulis', 'tanggalpublikasi', 'bahasa', 'file_name'];
}
