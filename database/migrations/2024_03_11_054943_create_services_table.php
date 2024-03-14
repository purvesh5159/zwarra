<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Enhealthcare');
            $table->string('Arhealthcare')->nullable();
            $table->string('Enservicename')->nullable();
            $table->string('Arservicename')->nullable();
            $table->string('Ensubservicename')->nullable();
            $table->string('Arsubservicename')->nullable();
            $table->string('Estimatedtime')->nullable();
            $table->string('Price')->nullable();
            $table->string('Newprice')->nullable();
            $table->text('Gender')->nullable();
            $table->text('Logo')->nullable();
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
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
}
