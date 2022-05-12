<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_num');
            
            $table->timestamp('date');
            $table->timestamp('points_date');

            $table->integer('earned_points')->default(0);
            $table->integer('promotions_points')->default(0);
            $table->integer('penalized_points')->default(0);

            $table->foreignId('invoice_state_id')->constrained();
            $table->unsignedBigInteger('user_origin_id');

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
        Schema::dropIfExists('invoices');
    }
}
