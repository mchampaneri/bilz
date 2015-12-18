<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('bill_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->double('total_amount');
            $table->double('discount_amount');
            $table->double('payable_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bill_items');
    }
}
