<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/microcredencials",
 *     tags={"Microcredencial"},
 *     summary="Listar Microcredencial",
 *     @OA\Response(
 *         response=200,
 *         description="Respuesta exitosa",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="nombre", type="string")
@OA\Property(property="duracion", type="string")
@OA\Property(property="institucion_emisora", type="string")
@OA\Property(property="certificado", type="string")
@OA\Property(property="software", type="string")
 *             )
 *         )
 *     )
 * )
 */
class MicrocredencialController extends Controller
{
    public function index()
    {
        return response()->json([{"nombre": "ej_nombre", "duracion": "ej_duracion", "institucion_emisora": "ej_institucion_emisora", "certificado": "ej_certificado", "software": "ej_software"}]);
    }
}
