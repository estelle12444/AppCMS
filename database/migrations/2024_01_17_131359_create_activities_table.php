<?php

use App\Models\Enums\ActivityTypeEnum;
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
        foreach (ActivityTypeEnum::cases() as $value) {
            Schema::dropIfExists($value->value);
        }

        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->Text('resume')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->dateTime('limit_date')->nullable();
            $table->string('type', 20);
            $table->string('translate_code', 10)->default('fr');
            $table->bigInteger('parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
