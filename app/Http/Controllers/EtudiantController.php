<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EtudiantsImport;
use App\Exports\EtudiantsExport;
use App\Models\travail;

class EtudiantController extends Controller
{
    //
    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImportExport()
    {
        return view('file-import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImport(Request $request)
    {
        Excel::import(new EtudiantsImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileExport()
    {
        return Excel::download(new EtudiantsExport, 'users-collection.xlsx');
    }
    public function home()
    {
        return view('user.home', [
            'lastTravails' => travail::orderBy('updated_at')->paginate('8'),
        ]);
    }
}
