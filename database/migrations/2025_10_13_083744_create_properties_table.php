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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('hotel_id')->nullable()->constrained('hotels')->cascadeOnDelete();
            $table->foreignId('owner_id')->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->longText('description');
            $table->string('address')->nullable();
            $table->json('location')->nullable();
            $table->json('equipments');
            $table->unsignedInteger('guest');
            $table->unsignedInteger('room');
            $table->unsignedInteger('bed')->nullable();
            $table->boolean('bath')->nullable();
            $table->unsignedInteger('bathIntern')->nullable();
            $table->unsignedInteger('bathExtern')->nullable();
            $table->boolean('toilet')->nullable();
            $table->unsignedInteger('toiletIntern')->nullable();
            $table->unsignedInteger('toiletExtern')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('kitchen')->nullable();
            $table->decimal('pricePerNight', 8, 2)->nullable();
            $table->decimal('pricePerDay', 8, 2)->nullable();
            $table->decimal('pricePerMonth', 8, 2)->nullable();
            $table->decimal('pricePerYear', 8, 2)->nullable();
            $table->boolean('isOffered')->default(false);
            $table->unsignedInteger('discount')->nullable();
            $table->boolean('isAvailable')->default(true);
            $table->boolean('active')->default(true);
            $table->string('coverImage');
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
