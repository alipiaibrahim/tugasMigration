<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->char('semester', 5);
            $table->char('kode_matkul', 8)->index();
            $table->char('thn_ajaran', 10);
            $table->timestamps();

            $table->foreign('npm')->references('npm')->on('collage_students');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
