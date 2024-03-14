<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorpositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Doctorpositions', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->integer('Price')->nullable();
            $table->boolean('Status')->nullable()->default(0);
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
        Schema::table('Doctorpositions', function (Blueprint $table) {
            //
        });
    }
}
