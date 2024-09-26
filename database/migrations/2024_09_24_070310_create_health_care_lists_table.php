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
        Schema::create('health_care_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('health_care_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('reference_no')->nullable();
            $table->string('department')->nullable();
            $table->string('n_m_c_no')->nullable();
            $table->string('slug');
            $table->text('qualification')->nullable();
            $table->string('position');
            $table->text('o_p_d_schedule')->nullable();
            $table->longText('details');
            $table->string('youtube_link');
            $table->string('address');
            $table->text('map_url');
            $table->string('twitter_url');
            $table->string('facebook_url');
            $table->string('whats_app_no');
            $table->string('image')->nullable();
            $table->boolean('status')->default(0);
            $table->string('name');
            $table->string('contact_number');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_care_lists');
    }
};
