<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('property_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('registered_user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('reference_no')->nullable();
            $table->string('rate');
            $table->longText('description');
            $table->string('slug');
            $table->longText('map_url');
            $table->string('address');
            $table->string('position');
            $table->string('is_rent');
            $table->string('bed_room')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('internet')->nullable();
            $table->string('parking')->nullable();
            $table->string('area');
            $table->string('kitchen_type')->nullable();
            $table->string('deposit');
            $table->string('features')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('property_lists');
    }
};
