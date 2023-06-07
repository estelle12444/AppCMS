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
        Schema::table('__business_sector__partners', function (Blueprint $table) {
            Schema::dropIfExists('__business_sector__partners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('__business_sector__partners', function (Blueprint $table) {
            //
        });
    }
};
