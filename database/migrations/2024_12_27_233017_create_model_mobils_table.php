<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelMobilsTable extends Migration
{
    public function up()
    {
        Schema::create('model_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('model');
            $table->year('tahun');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('model_mobils');
    }
}
