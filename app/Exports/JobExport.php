<?php

namespace App\Exports;

use App\Models\Job;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class JobExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Job::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Job Title',
            'Alamat Kantor',
            'Deskripsi Pekerjaan',
            'Kemampuan yang Diperlukan',
            'Pengalaman yang Diperlukan',
            'Jumlah Lowongan',
            'Sifat Pekerjaan',
            'Gaji/Kisaran Gaji',
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
