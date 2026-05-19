<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodis';

    protected $fillable = [
    'nama_prodi',
    'singkatan',
    'kaprodi',
    'fakultas_id'
];

public function fakultas()
{
    return $this->belongsTo(Fakultas::class);
}
}
