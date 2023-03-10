<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
  protected $fillable = [
      'nama',
      'sekolah',
      'program',
      'angkatan',
      'skor'
  ];
    use HasFactory;
}
