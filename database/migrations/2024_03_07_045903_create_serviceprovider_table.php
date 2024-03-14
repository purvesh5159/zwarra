<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceproviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('serviceprovider');
        Schema::create('serviceprovider', function (Blueprint $table) {
            $table->id();
            $table->string('Enname');
            $table->string('Arname')->nullable();
            $table->string('Email')->unique();
            $table->string('Password')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Crnumber')->nullable();
            $table->string('City')->nullable();
            $table->string('Countrycode')->nullable();
            $table->string('vat')->nullable();
            $table->text('Regcertificate');
            $table->text('Logo')->nullable();
            $table->text('Comcerregister')->nullable();
            $table->text('Healthlicence')->nullable();
            $table->text('Regcertificate_url')->nullable();
            $table->text('Logo_url')->nullable();
            $table->text('Comcerregister_url')->nullable();
            $table->text('Healthlicence_url')->nullable();
            $table->string('Typeofservice')->nullable();
            $table->string('Financialshare')->nullable();
            $table->timestamp('CreatedAt')->useCurrent();
            $table->timestamps();
        });
        Schema::table('serviceprovider', function (Blueprint $table) {
            // Change column to nullable
            $table->string('Enname')->nullable()->change();
            $table->string('vat')->nullable()->change();
            $table->text('Regcertificate')->nullable()->change();
            $table->text('Logo')->nullable()->change();
            $table->text('Comcerregister')->nullable()->change();
            $table->text('Healthlicence')->nullable()->change();
            $table->text('Regcertificate_url')->nullable()->change();
            $table->text('Logo_url')->nullable()->change();
            $table->text('Comcerregister_url')->nullable()->change();
            $table->text('Healthlicence_url')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceprovider');
    }
}
