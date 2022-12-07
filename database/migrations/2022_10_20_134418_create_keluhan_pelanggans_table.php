<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhan_pelanggans', function (Blueprint $table) {
            $table->string('id', 20);
            $table->string('nama', 50);
            $table->string('email', 20);
            $table->integer('nomor_hp');
            $table->boolean('flag_aktif');
            $table->string('status_keluhan', 1);
            $table->text('keluhan')->default('O');
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
        Schema::dropIfExists('keluhan_pelanggans');
    }
};
