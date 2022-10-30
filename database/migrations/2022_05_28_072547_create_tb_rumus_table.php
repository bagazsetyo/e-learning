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
        Schema::create('tb_rumus', function (Blueprint $table) {
            $table->id();
            $table->string('id_mapel')->nullable();
            $table->string('judul')->nullable();
            $table->longText('input')->nullable();
            $table->longText('rumus')->nullable();
            $table->longText('contoh')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tb_rumus');
    }
};
