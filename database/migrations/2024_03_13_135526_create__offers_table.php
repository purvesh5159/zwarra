<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Offers', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Name');
            $table->text('Logo')->nullable();
            $table->string('Code')->nullable();
            $table->string('Percantage')->unique();
            $table->string('Count')->nullable();
            $table->string('Type')->nullable();
            $table->string('Servicename')->nullable();
            $table->string('Subservicename')->nullable();
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
        Schema::table('Offers', function (Blueprint $table) {
            //
        });
    }
}
