<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbWebinarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_webinar', function (Blueprint $table) {
            $table->id();
            $table->string('pamflet_webinar', 100);
            $table->string('judul_webinar', 100);
            $table->text('deskripsi');
            $table->date('deadline');
            $table->integer('id_kategori_webinar')->unsigned()->default(1);
            $table->string('link', 100);
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
        Schema::dropIfExists('tb_webinar');
    }
}
