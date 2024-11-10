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
        Schema::create('job_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('job_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('reference_no')->nullable();
            $table->string('slug');
            $table->string('position');
            $table->longText('details');
            $table->text('map_url');
            $table->string('facebook_url');
            $table->string('whats_app_no');
            $table->string('website_url')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(0);
            $table->string('address');
            $table->string('job_name');
            $table->string('contact_number');
            $table->string('job_type');
            $table->string('years_of_experience');
            $table->string('gender');
            $table->string('desired_skills_experience');
            $table->string('salary_range');
            $table->string('publish_date');
            $table->string('deadline_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_lists');
    }
};
