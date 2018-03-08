<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->timestamps();
        });

        DB::table('cards')->insert(
            array(
                'id' => '1',
                'name' => 'Entrega al proyecto',
                'path' => 'img/tarjeta1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('cards')->insert(
            array(
                'id' => '2',
                'name' => 'Innovacion',
                'path' => 'img/tarjeta2.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('cards')->insert(
            array(
                'id' => '3',
                'name' => 'Apoyo al equipo',
                'path' => 'img/tarjeta3.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('cards')->insert(
            array(
                'id' => '4',
                'name' => 'Calidad de Soluciones',
                'path' => 'img/tarjeta4.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
