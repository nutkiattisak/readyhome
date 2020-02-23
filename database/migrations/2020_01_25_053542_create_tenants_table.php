<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('tenant_id');
            //$table->enum('title', ['นาย', 'นาง', 'นางสาว']);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->char('id_number', 13)->nullable();
            $table->char('phone', 10)->nullable();
            $table->text('address')->nullable();
            $table->string('email')->unique();
            $table->date('birthdate');
            $table->enum('status', ['stay', 'move']);
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
        Schema::dropIfExists('tenants');
    }
}
