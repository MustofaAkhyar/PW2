<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ["npm","nama","prodi_id","tanggal_lahir","tempat_lahir","alamat"];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }

}
