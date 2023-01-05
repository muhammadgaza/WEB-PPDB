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
        Schema::create('student_registers', function (Blueprint $table) {
            $table->id();
            $table->string('NISN');
            $table->enum('jenis_kelamin', ['laki-lkai', 'perempuan']);
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('email');
            $table->string('phone_number',);
            $table->string('phone_number_ayah',);
            $table->string('phone_number_ibu');
            $table->enum('role', ['student', 'admin']);
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
        Schema::dropIfExists('student_registers');
    }
};
