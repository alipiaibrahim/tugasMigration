<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollageStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collage_students', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10)->index();
            $table->string('nama');
            $table->char('kelas', 2);
            $table->char('nidn', 10);
            $table->year('tahun_masuk');
            $table->timestamps();

            $table->foreign('nidn')->references('nidn')->on('lectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collage_students');
    }
}
