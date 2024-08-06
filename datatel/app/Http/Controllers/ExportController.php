<?php

// app/Http/Controllers/ExportController.php
namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SpecificTablesExport;

class ExportController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new SpecificTablesExport(), 'database.xlsx');
    }
}
