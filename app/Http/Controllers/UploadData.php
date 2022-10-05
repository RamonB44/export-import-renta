<?php

namespace App\Http\Controllers;

use App\GroupData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class UploadData extends Controller
{
    //
    public function load_data($option){

        switch ($option) {
            case 'm_quimi':
                # code...
                $data = GroupData::query('');
                break;
            case 'diario':
                # code...
                $data = GroupData::query('');
                break;
            case 'ingreso':
                # code...
                $data = GroupData::query('');
                break;

            default:
                # code...
                break;
        }
        return response()->json($data, 200 );
    }

    public function truncate_all_tables(){

    }

    public function get_excel(){
        $data = DB::select('select * from diario');

        // return Excel::create('diario', function($excel) {

        //     $excel->sheet('diario-sheet', function($sheet) {

        //         $sheet->cell('A1', function($cell) {

        //             // manipulate the cell
        //             $cell->setValue('data1');

        //         });

        //     });

        // })->export('xls');

        return Excel::download($data, 'users.xlsx');
    }
}
