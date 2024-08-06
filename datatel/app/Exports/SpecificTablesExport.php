<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;

class SpecificTablesExport implements WithMultipleSheets
{
    use Exportable;

    protected $tables = [
        'bank',
        'bpr',
        'cafe',
        'datapelanggan',
        'faskes',
        'hotel',
        'pdam',
        'perusahaan',
        'sma',
        'stasiuntv',
        'univ',
        'wisata_lamsel',
        'wisatakuliner'
    ];

    public function sheets(): array
    {
        $sheets = [];

        foreach ($this->tables as $table) {
            $sheets[] = new TableSheetExport($table);
        }

        return $sheets;
    }
}

class TableSheetExport implements FromQuery, WithTitle, WithHeadings
{
    protected $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }

    public function query()
    {
        return DB::table($this->tableName)->orderBy('id');
    }

    public function title(): string
    {
        return ucfirst($this->tableName); // Capitalize table name for sheet title
    }

    public function headings(): array
    {
        // Fetch column names dynamically or set them manually based on table structure
        $columns = DB::getSchemaBuilder()->getColumnListing($this->tableName);
        return $columns;
    }
}
