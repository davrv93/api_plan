<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/programaestudios",
 *     tags={"ProgramaEstudio"},
 *     summary="Listar ProgramaEstudio",
 *     @OA\Response(
 *         response=200,
 *         description="Respuesta exitosa",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="nombre", type="string")
@OA\Property(property="campus", type="string")
@OA\Property(property="nombre_titulo", type="string")
@OA\Property(property="estado", type="string")
 *             )
 *         )
 *     )
 * )
 */
class ProgramaEstudioController extends Controller
{
    public function index()
    {
        return response()->json([{"nombre": "ej_nombre", "campus": "ej_campus", "nombre_titulo": "ej_nombre_titulo", "estado": "ej_estado"}]);
    }
}
