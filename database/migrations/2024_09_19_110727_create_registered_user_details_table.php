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
        Schema::create('registered_user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('full_name')->nullable();
            $table->string('address')->nullable();
            $table->string('map_url')->nullable();
            $table->string('whats_app_number')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('avatar')->nullable();
            $table->string('establish_date');
            $table->string('citizenship_image_front')->nullable();
            $table->string('citizenship_image_back')->nullable();
            $table->string('ward_no')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registered_user_details');
    }
};
