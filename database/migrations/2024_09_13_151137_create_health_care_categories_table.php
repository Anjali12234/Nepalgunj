<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('health_care_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_ne');
            $table->string('slug');
            $table->string('type')->nullable();
            $table->integer('position')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('health_care_categories');
    }
};
