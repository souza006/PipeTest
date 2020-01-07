<?php

namespace App\Exports;

use App\Deal;
use Maatwebsite\Excel\Concerns\FromCollection;

class DealsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Deal::all();
    }
}
