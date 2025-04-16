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
        Schema::create('hospitality_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospitality_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('reference_no')->nullable();
            $table->string('slug');
            $table->string('position');
            $table->longText('details');
            $table->string('youtube_link')->nullable();
            $table->text('map_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('whats_app_no');
            $table->string('thumbnail')->nullable();
            $table->boolean('status')->default(1);
            $table->string('website_url')->nullable();
            $table->text('opening_time')->nullable();
            $table->string('address');
            $table->string('name');
            $table->string('contact_number');
            $table->string('email');
            $table->softDeletes();
            $table->boolean('is_featured')->default(0);

            $table->integer('total_rooms')->nullable();  // For hotels or star hotels
            $table->string('room_types')->nullable();  // Room types
            $table->string('facilities')->nullable();  // Facilities like free Wi-Fi, pool
            $table->decimal('price_per_night', 8, 2)->nullable();  // Price per night for hotels
            $table->decimal('average_meal_price', 8, 2)->nullable();  // Avg meal price for restaurants
            $table->string('menu')->nullable();  // Store restaurant/cafe menu
            $table->string('parking_available')->nullable();
            $table->string('delivery_available')->nullable();  // For restaurants
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitality_lists');
    }
};
