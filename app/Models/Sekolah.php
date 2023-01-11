<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenjang_id',
        'kab_id',
        'prov_id',
        'npsn',
        'no_registrasi',
        'nm_yayasan',
        'thn_berdiri',
        'telp',
        'email',
        'kecamatan',
        'alamat',
        'bhpnu'
    ];

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class, 'jenjang_id', 'id');
    }

    public function prov()
    {
        return $this->belongsTo(Provinsi::class, 'prov_id', 'id');
    }

    public function kab()
    {
        return $this->belongsTo(Kabupaten::class, 'kab_id', 'id');
    }

}
