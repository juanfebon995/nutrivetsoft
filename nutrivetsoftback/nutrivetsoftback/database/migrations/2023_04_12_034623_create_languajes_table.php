<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languajes', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('spanish');
            $table->string('english');
            $table->integer('data_type')->unsigned();
            $table->foreign('data_type')->references('id')->on('data_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languajes');
    }
}
