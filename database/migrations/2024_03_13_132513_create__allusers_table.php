<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Allusers', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Firstname');
            $table->string('Lastname')->nullable();
            $table->string('Email')->unique();
            $table->string('Phone')->nullable();
            $table->string('City')->nullable();
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
        Schema::table('Allusers', function (Blueprint $table) {
            //
        });
    }
}
