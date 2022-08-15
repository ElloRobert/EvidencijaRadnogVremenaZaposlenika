<?php

namespace App\Exports;

use App\Models\Poduzeca;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PoduzecaExport implements FromCollection, WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($poduzece): array
    {

        return[
         $poduzece->id,
         $poduzece->nazivPoduzeca,
         $poduzece->datumOsnutka,
         $poduzece->vlasnik,
         $poduzece->OIB,
         $poduzece->kontakt,
         $poduzece->email,
         $poduzece->ulica,
         $poduzece->kucniBroj,
         $poduzece->mjesto
        ];
    }

    public function headings(): array{
        return [
         'Id',
         'Naziv poduzeća',
         'Datum osnutka',
         'Vlasnik',
         'OIB',
         'Kontakt',
         'Email',
         'Ulica',
         'Kućni broj',
         'Mjesto'
        ];
    }
    public function collection()
    {
        return Poduzeca::all();
    }
}
