<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaborotaryservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laborotaryservices', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Image');
            $table->boolean('Status');
            $table->timestamp('CreatedAt')->useCurrent();
            $table->string('TypeOfService');
            $table->unsignedBigInteger('labservicesid');
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
        Schema::dropIfExists('laborotaryservices');
    }
}
