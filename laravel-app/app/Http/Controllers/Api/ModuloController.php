<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/modulos",
 *     tags={"Modulo"},
 *     summary="Listar Modulo",
 *     @OA\Response(
 *         response=200,
 *         description="Respuesta exitosa",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="nombre", type="string")
@OA\Property(property="ciclos_abarcados", type="string")
@OA\Property(property="cantidad_asignaturas", type="string")
@OA\Property(property="microcredenciales", type="string")
 *             )
 *         )
 *     )
 * )
 */
class ModuloController extends Controller
{
    public function index()
    {
        return response()->json([{"nombre": "ej_nombre", "ciclos_abarcados": "ej_ciclos_abarcados", "cantidad_asignaturas": "ej_cantidad_asignaturas", "microcredenciales": "ej_microcredenciales"}]);
    }
}
