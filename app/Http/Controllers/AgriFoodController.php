<?php

namespace App\Http\Controllers;

use App\Imports\AgriFoodImport;
use App\Models\AgriFoodModel;
use Exception;
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
        try {
            Excel::import(new AgriFoodImport(), $request->file('file'));
            $records = AgriFoodModel::get();
            return response()->json(['status' => true, 'records' => $records]);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'records' => AgriFoodModel::get()]);
        }
    }

    public function search(Request $request)
    {
        try {
            $request->validate(
                ['search' => 'required']
            );
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }

        try {
            $records = AgriFoodModel::where('business_name', 'LIKE', "%$request->search%")->get();
            if ($records->count()) {
                return response()->json(['result' => $records, 'status' => true]);
            } else {
                return response()->json(['status' => false, 'message' => 'No record found for this business']);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'Unexpected error occurred']);
        }
    }
}
