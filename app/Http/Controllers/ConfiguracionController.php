<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Especie;

class ConfiguracionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return Configuracion::first();
  }

  // Editar la configuración o cerrar el trimestre
  public function update(Request $request, $id)
  {
    if (!is_array($request->all())) {
      return ['error' => 'request must be an array'];
    }
    try{
      $conf = Configuracion::findOrFail($id);
      $conf->update($request->all());

      // Si la variable 'cierre_trimestre' viene como 1 o verdadero, entonces
      // Se actualizan todos los registros del trimestre vigente y su estado se cambia de 1 a 0
      if ($request->cierre_trimestre == 1) {
        $especies = Especie::where('trimestre_vigente', '=', 1)->get();
        foreach ($especies as $especie) {
          $especie->trimestre_vigente = 0;
          $especie->save();
        }
      }

      return ['update' => true];
    }catch (\Exception $e) {
      $data = [
        'errors' => true,
        'msg' => $e->getMessage(),
      ];

      return \Response::json($data, 404);
    }
  }
}
