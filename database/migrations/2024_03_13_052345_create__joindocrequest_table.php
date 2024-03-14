<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoindocrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Joindocrequest', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->string('Email')->unique();
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
        Schema::table('Joindocrequest', function (Blueprint $table) {
            //
        });
    }
}
