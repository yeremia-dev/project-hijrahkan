<?php

namespace App\Exports;


use App\Info;
use App\JenisCicilan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DataInfoExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.datainfo', [
            'datainfos' => Info::all(),
        ]);
    }
}
