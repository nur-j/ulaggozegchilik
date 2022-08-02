<?php

namespace App\Exports;

use App\Models\Permission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PermissionExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Permission::all();
    }

    public function map($row): array {
        $fields = [
            $row->razresheniye_no,
            $row->gos_prinad,
            $row->marka,
            $row->gos_nomer,
            $row->woditel_fio,
            $row->punkt_pog,
            $row->punkt_wyg,
            $row->marshrut,
            $row->gruz,
            $row->prinad,
            $row->zayawitel,
            $row->mesto_wydachi
        ];
        return $fields;
    }

    public function headings(): array
    {
        return [
            '№ разрешения',
            'Государственная принадлежность автотранспортного средства',
            'Марка автотранспортного средства',
            'Государственный № автотранспортного средства',
            'Фамилия и имя водителя',
            'Пункт погрузки автотранспортного средства',
            'Пункт выгрузки автотранспортного средства',
            'Маршрут следования груза',
            'Наименование и вес груза',
            'Принадлежность груза',
            'Наименование заявителя',
            'Место выдачи и дата'
        ];
    }
}
