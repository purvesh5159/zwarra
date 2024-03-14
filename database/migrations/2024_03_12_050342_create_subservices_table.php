<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subservices', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->text('Endescription')->nullable();
            $table->text('Ardescription')->nullable();
            $table->string('Service')->nullable();;
            $table->string('Servicetype')->nullable();
            $table->text('Eninstrucation')->nullable();
            $table->text('Arinstrucation')->nullable();
            $table->string('Entitle')->nullable();
            $table->string('Artitle')->nullable();
            $table->integer('Price')->nullable();
            $table->string('Healthcare')->nullable();
            $table->boolean('Status')->nullable();
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
        Schema::table('subservices', function (Blueprint $table) {
            //
        });
    }
}
