<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'data_infos';

    protected $fillable = [
        'nama', 'nomor_hp', 'email',
    ];
}
