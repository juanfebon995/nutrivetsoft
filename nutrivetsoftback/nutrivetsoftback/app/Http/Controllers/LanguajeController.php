<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Http\Repositories\LanguajeEntityRepository;

class LanguajeController extends Controller
{
    //
    public function searchLanguaje(LanguajeEntityRepository $languajeEntityRepository){

        return response()->json(
            $languajeEntityRepository->SearchLanguaje()
        );

    }

    public function addDataType(Request $request, LanguajeEntityRepository $languajeEntityRepository){

        $response = $languajeEntityRepository->addDataType($request);

        return response()->json(
            $response, $response->getStatusCode()
        );

    }
}
