<?php


namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;


class LanguajeEntityRepository
{
    public function SearchLanguaje() {

        $languajes = DB::table('languajes')->get();
        return $languajes;

    }

}