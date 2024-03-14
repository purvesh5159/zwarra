<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientregistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Patientregistration', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->string('Email')->unique();
            $table->string('Phone')->nullable();
            $table->string('City')->nullable();
            $table->string('Healthcare')->nullable();
            $table->text('Description')->nullable();
            $table->date('Bookeddate')->nullable();
            $table->string('Status')->nullable();
            $table->string('Nationalid')->nullable();
            $table->string('Healthcareemail')->nullable();
            $table->text('Healthissue')->nullable();
            $table->integer('Price')->nullable();
            $table->timestamp('CreatedAt')->useCurrent();
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
        Schema::table('Patientregistration', function (Blueprint $table) {
            //
        });
    }
}
