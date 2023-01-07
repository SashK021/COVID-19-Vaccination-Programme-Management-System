<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_users', function (Blueprint $table) {
            $table->id();
            $table->string('NIC')->unique();
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Dose_type');
            $table->string('Dose_num');
            $table->string('Email');
            $table->string('MNumber');
            $table->string('Address');
            $table->string('Division');
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
        Schema::dropIfExists('register_users');
    }
};
