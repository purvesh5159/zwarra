<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlldoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alldoctors', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->string('Email')->unique();
            $table->string('Password')->nullable();
            $table->string('Licenceno')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Yearofexp')->nullable();
            $table->text('Medicalspec')->nullable();
            $table->string('Position')->nullable();
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
        Schema::table('Alldoctors', function (Blueprint $table) {
            //
        });
    }
}
