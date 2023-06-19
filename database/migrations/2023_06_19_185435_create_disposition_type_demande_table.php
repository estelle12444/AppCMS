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
        Schema::create('disposition_type_demande', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disposition_id');
            $table->unsignedBigInteger('type_de_demande_id');


            $table->foreign('disposition_id')->references('id')->on('dispositions')->onDelete('cascade');
            $table->foreign('type_de_demande_id')->references('id')->on('type_de_demandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposition_type_demande');
    }
};
