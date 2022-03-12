<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('contactNumber');
            $table->string('dateOfBirth');
            $table->string('religion');
            $table->string('status');
            $table->string('gender');
            $table->integer('monthlyIncome');
            $table->string('socialClass');
            $table->integer('householdNumber');
            $table->string('municipality');
            $table->string('sitio');
            $table->string('sector');
            $table->longText('occupation');
            $table->string('markAs');
            $table->string('remarks');
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
        Schema::dropIfExists('registrations');
    }
}
