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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->longText('address');
            $table->string('mobile');
            $table->string('email');
            $table->longText('introduction')->nullable();
            $table->longText('introFooter')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('facebook')->nullable();
            $table->string('messenger')->nullable();
            $table->date('birthdate')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
