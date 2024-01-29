<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TABLES = [
        'actionnaires',
        'business_plans',
        // 'companies',
        'company_sectors',
        'demandes',
        'dispositions',
        // 'documents',
        'eligibilities',
        'marketings',
        'obligations',
        // 'page_counts',
        // 'roles',
        'sectors',
        'type_de_demandes',
        'type_de_documents'
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach (self::TABLES as $value) {
            Schema::table($value, function (Blueprint $table) {
                $table->string("translate_code", 10)->default("fr");
                $table->bigInteger("parent_id")->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (self::TABLES as $value) {
            Schema::table($value, function (Blueprint $table) {
                $table->dropColumn("translate_code");
                $table->dropColumn("parent_id");
            });
        }
    }
};
