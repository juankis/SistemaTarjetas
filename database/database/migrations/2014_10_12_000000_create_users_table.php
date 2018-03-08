<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('picture');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'id' => '1',
                'name' => 'Jorge Aguirre',
                'email' => 'jorge@hotmail.com',
                'password' => bcrypt('12345'),
                'picture' => 'img/persona1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '2',
                'name' => 'Nicol Fernandez',
                'email' => 'nicol@hotmail.com',
                'password' => bcrypt('12345'),
                'picture' => 'img/persona2.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );


        DB::table('users')->insert(
            array(
                'id' => '3',
                'name' => 'Natalia Castillo',
                'email' => 'natalia@hotmail.com',
                'password' => bcrypt('12345'),
                'picture' => 'img/persona3.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '4',
                'name' => 'Cristian',
                'email' => 'Cristian@hotmail.com',
                'password' => bcrypt('12345'),
                'picture' => 'img/persona4.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '5',
                'name' => 'Reinaldo Perez',
                'email' => 'reinaldo@hotmail.com',
                'password' => bcrypt('12345'),
                'picture' => 'img/persona5.jpg',
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
        Schema::drop('users');
    }
}
