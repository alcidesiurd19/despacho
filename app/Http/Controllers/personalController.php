<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DataTables;
use PhpOffice\PhpSpreadsheet\Calculation\Database;


class personalController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){

            $personal=DB::select('CALL spsel_personal()');
            return DataTables::of($personal)
                    ->addColumn('action', function ($personal){
                        $acciones ='<a href="javascript:void(0)" onclick="editarPersonal('.$personal->pe_lp.')" class ="btn btn-info btn-sm"> Editar</a>';
                        $acciones .='&nbsp;&nbsp;<button type="button" name="delete" id="'.$personal->pe_lp.'" class="delete btn btn-danger btn-sm">Eliminar</button>';
                        return $acciones;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('personal.index');

    }

    public function registrar (Request $request){

            $personal=DB::select('call spcre_personal(?,?,?,?,?,?,?,?)',
            [$request->lp, $request->dni, $request->nombre, $request->apellido, $request->domicilio, $request->provincia, $request->telefono,$request->fecha,]);

            return back();

    }

    public function eleminar($lp) {
        $personal=DB::select('call spdel_personal(?)', [$lp]);
        return back();

    }

    public  function editar ($lpp){
            $personal=DB::select('call spseledit_personal(?)', [$lpp]);
            return response()->json($personal);

    }

    public function actualizar(Request $request){



    }



}
