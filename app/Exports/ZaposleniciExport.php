<?php

namespace App\Exports;

use App\Models\Zaposlenici;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ZaposleniciExport implements FromCollection, WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($zaposlenik): array
    {

        return[
         $zaposlenik->id,
         $zaposlenik->ime,
         $zaposlenik->prezime,
         $zaposlenik->OIB,
         $zaposlenik->spol,
         $zaposlenik->datumRodenja,
         $zaposlenik->kontakt,
         $zaposlenik->email,
         $zaposlenik->ulica,
         $zaposlenik->kucniBroj,
         $zaposlenik->mjestoStanovanja,
         $zaposlenik->radnoMjesto
        ];
    }

    public function headings(): array{
        return [
         'Id',
         'Ime',
         'Prezime',
         'OIB',
         'Spol',
         'Datum rođenja',
         'kontakt',
         'Email',
         'Ulica',
         'Kućni broj',
         'Mjesto',
         'Radno mjesto'
        ];
    }

    public function collection()
    {
        return Zaposlenici::all();
    }
}
