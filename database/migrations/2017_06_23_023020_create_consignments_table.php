<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->string('date');
            $table->integer('receiver_id');
            $table->integer('delivery_type');
            $table->integer('pickup_type');

            $table->text('from_city');
            $table->text('to_city');

            $table->text('from_address')->nullable();
            $table->text('delivery_address');
           
            $table->integer('billing_party');
            $table->integer('transit_days');

            $table->string('pick_up_date');
            $table->string('due_date');
            $table->integer('billing_status')->default(0);

            $table->integer('tax_paid_by');
             $table->double('tax_amount');
          

            $table->double('delivery_charges');
            $table->double('extra_charges');

            $table->double('net_total');
            $table->text('remarks');

            $table->integer('journey_id')->default(0);
           
            $table->json('items');



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
        Schema::dropIfExists('consignments');
    }
}
