<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_list_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('post');
            $table->string('passed_year');
            $table->string('image');
            $table->string('description');
           $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
