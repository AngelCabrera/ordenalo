<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function(Blueprint $table){ // Crear tabla
            $table->increments("id");
            
            $table->string('title');
            $table->text('description');
            $table->decimal('pricing',9,2);
            $table->integer('user_id')->unsigned();
            $table->enum('status',['1','2'])->default('1');
            $table->foreign('user_id')
                    ->references('id')->on('users') 
                    ->onDelete('cascade');
            $table->integer('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')
                    ->references('id')->on('restaurants') 
                    ->onDelete('cascade');


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
        Schema::drop('products');
    }
}