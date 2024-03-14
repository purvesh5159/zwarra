<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_addresses', function (Blueprint $table) {
            Schema::dropIfExists('service_addresses');
            $table->id();
            $table->string('AddressLine1');
            $table->string('AddressLine2')->nullable();
            $table->string('Latitude');
            $table->string('Longitude');
            $table->string('Href')->nullable();
            $table->unsignedBigInteger('zwaara_service_id')->nullable(); // Add foreign key column
            $table->foreign('zwaara_service_id')->references('id')->on('zwaara_services')->onDelete('set null'); // Add foreign key constraint
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
        Schema::dropIfExists('service_addresses');
    }
}
