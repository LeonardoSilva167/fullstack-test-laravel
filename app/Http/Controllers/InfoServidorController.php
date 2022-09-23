<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InfoServidorController extends Controller
{
    /**
     * Retorna a data e hora da consulta no servifor
     */
    public function dataHora(): JsonResponse
    {
        try {
            return response()->json([
                'message' => 'Olá Mundo, servidor Laravel OK',
                'data' => date('d/m/Y H:i:s'),

            ], 200);
        }catch (\Exception $ex){
            return response()->json(['error' => true,'message' => $ex->getMessage()], $ex->getCode());
        }
    }

    /**
     * Recebe a mensagem enviada pelo usuario e retorna para ele
     */
    public function mensagem(Request $request): JsonResponse
    {
        try {
            $msg = $request->inputTexto;
            return response()->json([
                'message' => "Obrigado por enviar o Texto:" . $msg
            ], 200);
        }catch (\Exception $ex){
            return response()->json(['error' => true,'message' => $ex->getMessage()], $ex->getCode());
        }
    }
}
