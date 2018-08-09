<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Especies\TransformEspecie;
use App\Http\Controllers\AuthenticateController;
use App\Especie;
use App\Configuracion;

class EspecieController extends Controller
{
  protected $especiesTransformer;

  public function __construct(TransformEspecie $especiesTransformer){
    $this->especiesTransformer = $especiesTransformer;
  }

  //Todas las especies de la fiscalia que pertenece el usuario que se crearon en el trimestre vigente
  public function index(AuthenticateController $auth)
  {
    $especie = Especie::with(['subTipoEspecie.tipoEspecie'])
      ->where('id_fiscalia', $auth->getAuthUser()->id_fiscalia)
      ->where('trimestre_vigente', 1)
      ->get();

    return $this->especiesTransformer->transformCollection($especie->toArray());
  }

  //Todas las especies de la fiscalia que pertenece el usuario que no se crearon en el trimestre vigente
  public function trimestresNoVigente(AuthenticateController $auth)
  {
    $especie = Especie::with(['subTipoEspecie.tipoEspecie'])
      ->where('id_fiscalia', $auth->getAuthUser()->id_fiscalia)
      ->where('trimestre_vigente', 0)
      ->get();

    return $this->especiesTransformer->transformCollection($especie->toArray());
  }

  public function adminIndex(AuthenticateController $auth, $id_fiscalia)
  {
    $especie = Especie::with(['subTipoEspecie.tipoEspecie'])
      ->where('id_fiscalia', $id_fiscalia)
      ->where('trimestre_vigente', 1)
      ->get();

    return $this->especiesTransformer->transformCollection($especie->toArray());
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, AuthenticateController $auth)
  {
    if (!is_array($request->all())) {
      return ['error' => 'request must be an array'];
    }
    $rules = [
      'RUC' => 'required',
      'RUE' => 'required',
      'descripcion' => 'required',
    ];
    try {
      $validator = \Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return [
          'created' => false,
          'errors' => $validator->errors()->all(),
        ];
      } else {

        $configuracion = Configuracion::first();
        $especie = new Especie;

        $especie->anio                = $configuracion->anio;
        $especie->trimestre           = $configuracion->trimestre;
        
        $especie->RUC                 = $request->RUC;
        $especie->RUE                 = $request->RUE;
        $especie->descripcion         = $request->descripcion;
        $especie->fecha_incautacion   = $request->fecha_incautacion;
        $especie->fecha_ingreso       = $request->fecha_ingreso;
        $especie->id_sub_tipo_especie = $request->id_sub_tipo_especie;
        $especie->id_fiscalia         = $auth->getAuthUser()->id_fiscalia;
        $especie->save();

        return ['created' => true];
      }
    } catch (\Exception $e) {
      \Log::info('Error al crear la especie: ' . $e);
      return \Response::json(['created' => false], 500);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    try {
      return Especie::findOrFail($id);
    } catch (\Exception $e) {
      $data = [
        'errors' => true,
        'msg' => $e->getMessage(),
      ];
      return \Response::json($data, 404);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    if (!is_array($request->all())) {
      return ['error' => 'request must be an array'];
    }
    try{
      $especie = Especie::findOrFail($id);
      $especie->update($request->all());
      return ['update' => true];
    }catch (\Exception $e) {
      $data = [
        'errors' => true,
        'msg' => $e->getMessage(),
      ];

      return \Response::json($data, 404);
    }
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    try {
      Especie::findOrFail($id);
      Especie::destroy($id);
      return ['removed' => true];
    }catch (\Exception $e) {
      $data = [
        'errors' => true,
        'msg' => $e->getMessage(),
      ];

      return \Response::json($data, 404);
    }
  }
}
