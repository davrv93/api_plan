<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/campus",
 *     tags={"Campus"},
 *     summary="Listar campus de la UPeU",
 *     @OA\Response(
 *         response=200,
 *         description="Lista de campus",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id",      type="integer", example=1),
 *                 @OA\Property(property="nombre",  type="string",  example="Campus Lima"),
 *                 @OA\Property(property="estado",  type="string",  example="activo")
 *             )
 *         )
 *     )
 * )
 */
class CampusController extends Controller
{
    public function index()
    {
        return response()->json([
            [ "id" => 1, "nombre" => "Campus Lima",     "estado" => "activo" ],
            [ "id" => 2, "nombre" => "Campus Juliaca",  "estado" => "activo" ],
            [ "id" => 3, "nombre" => "Campus Tarapoto", "estado" => "activo" ]
        ]);
    }
}
