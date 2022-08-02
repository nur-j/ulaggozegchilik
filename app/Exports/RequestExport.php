<?php

namespace App\Exports;

use App\Models\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RequestExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Request::all();
    }

    public function map($row): array
    {
        $fields = [
            $row->corpname,
            $row->permission_number,
            $row->cmr_number,
            $row->fullname,
            $row->phone,
            $row->email,
        ];

        return $fields;
    }

    public function headings(): array
    {
        return [
            'Edaranyň ady',
            'Rugsatnama sany',
            'CMR sany',
            'Jogapkär işgär',
            'Telefon',
            'Email',
        ];
    }
}
