<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZwaaraServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('zwaara_services', function (Blueprint $table) {
    $table->id();
    $table->string('Title');
    $table->string('Image');
    $table->boolean('Status');
    $table->timestamp('CreatedAt')->useCurrent();
    $table->string('TypeOfService');
    $table->unsignedBigInteger('service_address_id'); // Add foreign key column
    $table->foreign('service_address_id')->references('id')->on('service_addresses')->onDelete('cascade'); // Add foreign key constraint
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
        Schema::dropIfExists('zwaara_services');
    }
}
