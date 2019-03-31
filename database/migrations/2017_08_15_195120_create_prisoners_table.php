<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prison_id');
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('address');
            $table->string('crime_id');
            $table->date('entrydate');
            $table->date('dischargedate');
            
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
        Schema::drop('prisoners');
    }
}
