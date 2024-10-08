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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('description')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
