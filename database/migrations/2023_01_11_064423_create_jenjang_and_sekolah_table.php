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
        Schema::create('jenjang', function (Blueprint $table) {
            $table->id();
            $table->string('nm_jenjang', 100);
            $table->timestamps();
        });
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenjang_id');
            $table->unsignedBigInteger('kab_id');
            $table->unsignedBigInteger('prov_id');
            $table->bigInteger('npsn')->unique();
            $table->char('no_registrasi', 15)->unique();
            $table->string('nm_yayasan');
            $table->year('thn_berdiri');
            $table->string('telp', 15);
            $table->string('email', 50)->unique();
            $table->string('kecamatan');
            $table->text('alamat');
            $table->enum('bhpnu', ['yes', 'no']);
            $table->timestamps();
            $table->foreign('jenjang_id')->references('id')->on('jenjang')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('kab_id')->references('id')->on('kabupaten')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('sekolah');
        Schema::dropIfExists('jenjang');
    }
};
