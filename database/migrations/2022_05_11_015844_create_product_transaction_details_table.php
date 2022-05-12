<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transaction_details', function (Blueprint $table) {
            $table->id();

            $table->string('product_name');
            $table->text('product_image_url');
            $table->integer('product_points');

            $table->integer('amount');

            $table->foreignId('product_id')->constrained();
            $table->foreignId('product_transaction_id')->constrained();

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
        Schema::dropIfExists('product_transaction_details');
    }
}
