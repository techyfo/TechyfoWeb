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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->text('description')->nullable();
            $table->text('icon')->nullable();
            $table->text('thumbnail')->nullable();
            //header
            $table->string('header_title')->nullable();
            $table->text('header_text')->nullable();
            $table->text('header_image')->nullable();
            //Section 1
            $table->string('sec_one_title')->nullable();
            $table->text('sec_one_text')->nullable();
            $table->text('sec_one_image')->nullable();
            //Section 2
            $table->string('sec_two_title')->nullable();
            $table->text('sec_two_text')->nullable();
            $table->text('sec_two_image')->nullable();

            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->integer('view_count')->default(1);
            $table->integer('priority')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
