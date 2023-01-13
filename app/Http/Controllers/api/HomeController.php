<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;



    /**
     * @OA\Post(
     *      path="/api/home",
     *      operationId="Home data",
     *      tags={"Home"},
     *      description="",
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          description="Provide your name",
     *          required=true,
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json"
     *          )
     *      )
     * )
     */
    class HomeController extends Controller
    {
        public function show(Request $request): JsonResponse
        {
            return response()->json([
                'name'=>$request->input('name'),
                'message' => 'Hello World',
            ]);
        }
    }
