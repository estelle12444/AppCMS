<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('legal_form');
            $table->string('RCCM');
            $table->string('taxpayer_account');
            $table->string('capital');
            $table->string('siege');
            $table->string('phone');
            $table->string('cellulaire')->nullable();
            $table->string('email');
            $table->string('website_link')->nullable();
            $table->string('legal_agent');
            $table->string('fonction');
            $table->string('activity');
            $table->enum('location_type', ['new_society', 'old_society'])->nullable();

            //$table->string('clients')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};