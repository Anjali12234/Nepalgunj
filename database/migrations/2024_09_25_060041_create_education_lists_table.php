<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('education_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('address');
            $table->string('contact_number');
            $table->string('affiliated')->nullable();
            $table->longText('description');
            $table->string('program');
            $table->string('email');
            $table->string('facebook_url');
            $table->string('website_url');
            $table->string('map_url');
            $table->string('whats_app_no');
            $table->string('reference_no')->nullable();
            $table->string('slug');
            $table->string('position');
            $table->boolean('status')->default(0);
           $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('education_lists');
    }
};
