<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pekerjaan', 'nama_perusahaan', 'tgl_mulai', 'tgl_selesai', 'deskripsi_pekerjaan'];
}
