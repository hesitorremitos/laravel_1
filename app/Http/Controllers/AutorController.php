<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function listar(){
        $autores = DB::select('SELECT * FROM autores');
        return $autores;
    }

    public function crear(Request $request){
        $ci = $request->ci;
        $nombre = $request->nombre;
        $direccion = $request->direccion;
        $fecha_nac = $request->fecha_nac;
        // Insertar
        DB::insert(
            "INSERT INTO autores(ci,nombre,direccion,fecha_nac) VALUES (?,?,?,?)",
            [$ci,$nombre, $direccion, $fecha_nac]
        );

        return "Insersion correcta";
        
    }

    public function eliminar($ci){
        DB::delete("DELETE FROM autores WHERE ci=?",[$ci]);
        return "Elimnado correctamente el ci: ".$ci;
    }

    public function actualizar(Request $request, $ci){
        DB::update(
            "UPDATE autores SET nombre = ?, direccion = ?, fecha_nac=? WHERE ci = ?",
            [$request->nombre, $request->direccion, $request->fecha_nac, $ci]
        );

        return "Autor actualizado con ci: ".$ci;
    }
}
