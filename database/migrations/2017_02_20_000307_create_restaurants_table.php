<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name');
            $table->string('address');
            $table->string('webPage');
            $table->enum('status',['1','2'])->default('1');
            $table->string('phone');
            $table->text('description');
            $table->string('rif');
            $table->integer('user_id')->unsigned();
            $table->string('email');

            $table->foreign('user_id')
                    ->references('id')
                    -> on ('users') -> onDelete('cascade');
            
            $table->rememberToken();
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
        Schema::dropIfExists('restaurants');
    }
}