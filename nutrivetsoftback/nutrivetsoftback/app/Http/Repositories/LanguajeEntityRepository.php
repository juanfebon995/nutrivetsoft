<?php


namespace App\Http\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataType;
use App\Models\Languaje;
use Illuminate\Support\Facades\Validator;


class LanguajeEntityRepository
{
    public function SearchLanguaje() {

        $languajes = DB::table('languajes')->get();
        return $languajes;

    }

    public function addDataType(Request $request){


        $validator = Validator::make($request->all(),[
            'description' => 'required|string|max:50|min:3'
        ]);

        if($validator->fails()){

            return response()->json($validator->errors()->toJson(), 400);

        }else{

            $dataType = new DataType();
            $dataType->description = $request->description;

            $response = $dataType->save();

            return response()->json([
                "msg" => "Succefully",
                "dataInsert" => $request->description,
                "response" => $response
            ], 200);
        }


    }

}