<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->foreignId('robotics_kit_id')
                ->nullable()
                ->after('robotics_kit')
                ->constrained('robotics_kits')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['robotics_kit_id']);
            $table->dropColumn('robotics_kit_id');
        });
    }
};
