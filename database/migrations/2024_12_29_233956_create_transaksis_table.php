<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mobil_id')->constrained('model_mobils')->onDelete('cascade'); // Hubungkan ke model_mobils
            $table->foreignId('pembeli_id')->constrained()->onDelete('cascade');
            $table->date('tanggal_transaksi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropForeign(['mobil_id']);
            $table->dropColumn('mobil_id');
        });
    }
}
