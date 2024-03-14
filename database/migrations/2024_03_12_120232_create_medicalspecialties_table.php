<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalspecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalspecialties', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->string('Estimatedtime')->nullable();
            $table->boolean('Status');
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
        Schema::table('medicalspecialties', function (Blueprint $table) {
            //
        });
    }
}
