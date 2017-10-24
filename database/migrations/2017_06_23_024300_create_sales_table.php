<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->json('consignment_ids');
            $table->integer('customer_id');

            $table->double('amount');
            $table->double('taxable_amount');
            $table->string('tax_paid_by');
            $table->double('tax_amount');
            $table->double('net_total');

            $table->string('bill_date');
            $table->string('due_date');
            

            $table->integer('status')->default(0);
            $table->text('remarks');



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
        Schema::dropIfExists('sales');
    }
}
