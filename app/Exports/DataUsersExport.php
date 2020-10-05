<?php

namespace App\Exports;

use App\DataUser;
use App\JenisCicilan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataUsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        $jenis_cicilan = JenisCicilan::all();
        return view('exports.datauser', [
            'datausers' => DataUser::all(),
            'jeniscicilans' => $jenis_cicilan,
        ]);
    }
}
