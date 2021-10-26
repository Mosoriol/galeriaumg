<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biografias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_categoriab');
            $table->text('titulo');
            $table->text('descripcion');
            $table->text('portada');
             $table->text('linkvideo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biografias');
    }
}
