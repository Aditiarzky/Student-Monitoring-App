<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nisn',
        'id_kelas',
        'jenis_kelamin',
        'ttl',
        'agama',
        'alamat',
        'telepon',
        'nama_ayah',
        'nama_ibu',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
