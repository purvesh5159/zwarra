<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Serviceprovider');
            $table->string('Servicename')->nullable();
            $table->string('Subservicename')->nullable();
            $table->string('Username')->nullable();
            $table->string('Phone')->unique();
            $table->string('Email')->nullable();
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
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
