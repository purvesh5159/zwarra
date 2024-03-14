<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankinginfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankinginfo', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Name');
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->text('Address')->nullable();
            $table->string('Doctor')->unique();
            $table->string('Servicename')->nullable();
            $table->string('Type')->nullable();
            $table->string('Healthcare')->nullable();
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
        Schema::table('bankinginfo', function (Blueprint $table) {
            //
        });
    }
}
