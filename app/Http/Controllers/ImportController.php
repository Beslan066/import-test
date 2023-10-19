<?php


namespace App\Http\Controllers;

use App\Imports\TestImport;
use App\Models\Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Shared\File;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory as Reader;
use PhpOffice\PhpSpreadsheet\Reader\Csv as CSVReader;

class ImportController extends Controller
{
    public function uploadForm()
    {
        return view('admin.index');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $fileExtension = $file->getClientOriginalExtension();

            if ($fileExtension == 'csv') {
                Excel::import(new TestImport, $file);

                return redirect()->route('homepage')->with('success', 'User Imported Successfully');
            }
        }
    }
}
