<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->integer('OrderId')->primary();
            $table->unsignedBigInteger('CustomerId')->references('CustomerId')->on('customer');
            $table->string('OrderStatus');
            $table->decimal('OrderTotal',10,2);
            $table->timestamp('CreatedDateTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Order');
    }
}
