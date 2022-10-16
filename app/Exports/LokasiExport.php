<?php

namespace App\Exports;

use App\Models\Lokasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LokasiExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lokasi::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Lokasi Kerja',
            'Created at',
            'Updated at'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
        // Style the first row as bold text.
        1    => ['font' => ['bold' => true]],
        ];
    }
}
