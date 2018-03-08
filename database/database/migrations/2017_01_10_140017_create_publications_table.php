<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('card_id')->unsigned();
            $table->foreign('card_id')
                  ->references('id')->on('cards')
                  ->onDelete('cascade');
            $table->integer('sender_user_id')->unsigned();      
            $table->foreign('sender_user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->integer('receptor_user_id')->unsigned();      
            $table->foreign('receptor_user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade'); 
            $table->timestamps();
        });

        DB::table('publications')->insert(
            array(
                'id' => '1',
                'description' => 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
                'card_id' => '1',
                'sender_user_id' => '1',
                'receptor_user_id' => '2',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );


        DB::table('publications')->insert(
            array(
                'id' => '2',
                'description' => 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
                'card_id' => '2',
                'sender_user_id' => '1',
                'receptor_user_id' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );


        DB::table('publications')->insert(
            array(
                'id' => '3',
                'description' => 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
                'card_id' => '3',
                'sender_user_id' => '1',
                'receptor_user_id' => '4',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );


        DB::table('publications')->insert(
            array(
                'id' => '5',
                'description' => 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
                'card_id' => '4',
                'sender_user_id' => '1',
                'receptor_user_id' => '5',
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
        Schema::dropIfExists('publications');
    }
}
