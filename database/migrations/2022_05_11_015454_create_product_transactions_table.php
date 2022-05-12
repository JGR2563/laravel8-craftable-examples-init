<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();

            $table->text('address_1');
            $table->text('address_2')->nullable();
            $table->string('cellphone', 50);
            $table->string('gov_id', 30);
            $table->string('full_name');
            $table->string('province');
            $table->string('city');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('transaction_state_id')->constrained();

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
        Schema::dropIfExists('product_transactions');
    }
}
