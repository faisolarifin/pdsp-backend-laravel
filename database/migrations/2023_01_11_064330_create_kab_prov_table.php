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
        Schema::create('provinsi', function (Blueprint $table) {
            $table->id();
            $table->string('nm_prov', 100);
            $table->timestamps();
        });
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prov_id');
            $table->string('nm_kab', 100);
            $table->integer('kode_kab');
            $table->timestamps();
            $table->foreign('prov_id')->references('id')->on('provinsi')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten');
        Schema::dropIfExists('provinsi');
    }
};
