<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('contract_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->char('phone', 10)->nullable();
            $table->char('id_number', 13)->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('rate', 8, 2);
            $table->decimal('deposit', 8, 2)->nullable();
            $table->decimal('booking_amount', 8, 2);
            $table->integer('water_units');
            $table->integer('elec_units');
            $table->text('remark')->nullable();
            $table->integer('booking_id')->nullable();
            $table->integer('room_id');
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
        Schema::dropIfExists('contracts');
    }
}
