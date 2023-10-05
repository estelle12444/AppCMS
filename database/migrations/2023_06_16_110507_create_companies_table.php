<?php

use App\Models\Partner;
use App\Models\Role;
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
            $table->string('legal_form')->nullable();
            $table->string('RCCM');
            $table->string('taxpayer_account')->nullable();
            $table->string('capital')->nullable();
            $table->string('siege');
            $table->string('phone');
            $table->string('cellulaire')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('website_link')->nullable();
            $table->string('legal_agent')->nullable();
            $table->string('fonction')->nullable();
            $table->string('activity')->nullable();
            $table->enum('location_type', ['new_society', 'old_society'])->nullable();
            $table->boolean('status');

            $table->foreignIdFor(Role::class);
            $table->foreignIdFor(Partner::class)->nullable();

            //$table->string('clients')->nullable();

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
