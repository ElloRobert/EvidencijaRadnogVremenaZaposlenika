<?php

namespace App\Exports;

use App\Models\OdradeniRad;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RadExport implements FromCollection,  WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($rad): array
    {

        return[
         $rad->id,
         $rad->datumRada,
         $rad->pocetakRada,
         $rad->krajRada,
         $rad->redovitiRad,
         $rad->prekovremeniRad,
         $rad->zastoj,
         $rad->Nenazocnost
         
        ];
    }

    public function headings(): array{
        return [
         'Id',
         'Datum rada',
         'Početak rada',
         'Kraj rada',
         'Redoviti rad',
         'Prekovremeni rad',
         'Zastoj',
         'Nenazocnost'
        ];
    }
    public function collection()
    {
        return OdradeniRad::all();
    }
}
