<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('personal_details', function (Blueprint $table) {
            $table->string('educ')->nullable();
            $table->string('course')->nullable();
            $table->date('yrgrad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_details', function (Blueprint $table) {
            $table->dropColumn('educ');
            $table->dropColumn('course');
            $table->dropColumn('yrgrad');
        });
    }
};
