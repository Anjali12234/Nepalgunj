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
        Schema::create('entertainment_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entertainment_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('address');
            $table->string('contact_number');
            $table->longText('description');
            $table->string('email');
            $table->string('facebook_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->longText('map_url')->nullable();
            $table->string('whats_app_no');
            $table->boolean('is_featured')->default(0);
            $table->string('reference_no')->nullable();
            $table->string('slug');
            $table->string('thumbnail')->nullable();
            $table->string('position');
            $table->boolean('status')->default(0);
           $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entertainment_lists');
    }
};
