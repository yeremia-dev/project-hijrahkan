<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $fillable = [
      'id_jenis', 'nama', 'nomor_hp', 'email', 'sisa_cicilan', 'besar_cicilan', 'sisa_waktu_cicilan', 'nama_bank'
    ];
}
