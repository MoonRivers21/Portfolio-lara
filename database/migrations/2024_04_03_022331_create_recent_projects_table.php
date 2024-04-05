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
        Schema::create('recent_projects', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image');
            $table->json('images')->nullable();
            $table->string('project_title');
            $table->longText('project_desc')->nullable();
            $table->json('tech_stack_id')->nullable();
            $table->date('date_develop')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recent_projects');
    }
};
