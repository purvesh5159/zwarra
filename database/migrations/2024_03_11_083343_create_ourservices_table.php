<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourservices', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo');
            $table->string('Enname');
            $table->string('Arname');
            $table->text('Endescription');
            $table->text('Ardescription');
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
        Schema::table('ourservices', function (Blueprint $table) {
            //
        });
    }
}
