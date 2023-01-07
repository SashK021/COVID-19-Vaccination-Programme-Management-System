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
        Schema::create('gen_pops', function (Blueprint $table) {
            $table->id();
            $table->string('NIC')->unique();
            $table->string('Iname');
            $table->string('Fname');
            $table->string('Mname')->nullable;
            $table->string('Lname');

            $table->string('Dose_type1')->nullable;
            $table->string('Dose1_num')->nullable;
            $table->string('Dose1_Date')->nullable;
            $table->string('Dose1_Loc')->nullable;

            $table->string('Dose_type2')->nullable;
            $table->string('Dose_num2')->nullable;
            $table->string('Dose2_Date')->nullable;
            $table->string('Dose2_Loc')->nullable;

            $table->string('Dose_type3')->nullable;
            $table->string('Dose_num3')->nullable;
            $table->string('Dose3_Date')->nullable;
            $table->string('Dose3_Loc')->nullable;

            $table->string('Dose_type4')->nullable;
            $table->string('Dose_num4')->nullable;
            $table->string('Dose4_Date')->nullable;
            $table->string('Dose4_Loc')->nullable;


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
        Schema::dropIfExists('gen_pops');
    }
};
