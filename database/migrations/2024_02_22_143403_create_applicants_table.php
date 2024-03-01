<?php

use App\Models\Activity;
use App\Models\Company;
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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Activity::class);
            $table->foreignIdFor(Company::class);
            $table->string('name');
            $table->string('email');
            $table->text('portfolio')->nullable();
            $table->text('skills')->nullable();
            $table->text('cover_letter')->nullable();
            $table->json('attachments')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
