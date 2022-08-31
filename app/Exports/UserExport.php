<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UserExport implements FromCollection, WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($user): array
    {

        return[
         $user->id,
         $user->ime,
         $user->prezime,
         $user->OIB,
         $user->spol,
         $user->datumRodenja,
         $user->kontakt,
         $user->email,
         $user->ulica,
         $user->kucniBroj,
         $user->mjestoStanovanja,
         $user->radnoMjesto
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
        return User::all();
    }
}
