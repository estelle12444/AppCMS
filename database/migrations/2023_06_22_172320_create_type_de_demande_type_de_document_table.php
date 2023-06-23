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
        Schema::create('type_de_demande_type_de_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_de_document_id');
            $table->unsignedBigInteger('type_de_demande_id');


            $table->foreign('type_de_document_id')->references('id')->on('type_de_documents')->onDelete('cascade');
            $table->foreign('type_de_demande_id')->references('id')->on('type_de_demandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_de_demande_type_de_document');
    }
};
