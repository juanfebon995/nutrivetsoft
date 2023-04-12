<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;

class TestingController extends Controller
{
    //
    public function connectionDB(){
        try{

            $dbname = DB::connection()->getDatabaseName();
            return "Connected database name is: ". $dbname;

        }catch(\Exception $ex){

            log::info(__METHOD__." ".$ex);
            return "Error in connecting to the database";

        }
    }

    public function index(){
        return "Welcome to NutrivetSoft!!";
    }
}
