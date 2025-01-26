<?php

namespace App\Http\Controllers;

use App\Imports\AgriFoodImport;
use App\Models\AgriFoodModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AgriFoodController extends Controller
{
    public function index()
    {
        return view('initiatives.AgriFood');
    }
    public function store()
    {
        $data = AgriFoodModel::get();
        return view('forms.agrifoodform', ['records' => $data]);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);
        Excel::import(new AgriFoodImport, $request->file('file'));
        $records = AgriFoodModel::get();
        return response()->json(['status' => true, 'records' => $records]);
    }
}
