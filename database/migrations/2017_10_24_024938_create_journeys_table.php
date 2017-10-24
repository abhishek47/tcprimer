<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->json('consignment_ids');

            $table->string('from');
            $table->string('to');

            $table->string('vehicle_type');

            $table->string('vehicle_no');

            $table->integer('hired_thru')->nullable();

            $table->integer('driver_id');
            $table->string('driver_id_no');

            $table->string('due_date');

            $table->double('hire_charges');
            $table->double('extra_charges')->nullable();
            $table->double('advance');
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
        Schema::dropIfExists('journeys');
    }
}
