<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Phone')->unique();
            $table->string('Email')->nullable();
            $table->text('Issues')->nullable();
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
        Schema::table('complaints', function (Blueprint $table) {
            //
        });
    }
}
