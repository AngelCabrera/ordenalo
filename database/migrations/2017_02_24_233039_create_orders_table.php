<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table){ 
            $table->increments("id");
            $table->integer("shopping_cart_id")->unsigned();
            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts")->onDelete('cascade');
            $table->string('line1');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                    ->references('id')
                    -> on ('users') -> onDelete('cascade');
            $table->string('status')->default('Pendiente de envío');
            $table->string('guide_number')->nullable();
            $table->integer('total');
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
        Schema::drop('orders');
    }
}
