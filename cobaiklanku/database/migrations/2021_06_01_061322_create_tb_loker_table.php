<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_loker', function (Blueprint $table) {
            $table->id();
            $table->string('pamflet_loker', 100);
            $table->string('judul_loker', 100);
            $table->text('deskripsi');
            $table->date('deadline');
            $table->string('link', 100);
            $table->string('status')->nullable();
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
        Schema::dropIfExists('tb_loker');
    }
}
