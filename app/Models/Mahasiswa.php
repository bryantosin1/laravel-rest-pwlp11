<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'foto_mhs',
        'jurusan',
        'email',
        'no_hp',
        'kelas_id',
    ];

    public function kelas() {
        return $this->belongsTo(Kelas::class);
    }
    public function mataKuliah() {
        return $this->belongsToMany(MataKuliah::class, "mahasiswa_matakuliah", "mahasiswa_id", "matakuliah_id")->withPivot('nilai');
    }
}
