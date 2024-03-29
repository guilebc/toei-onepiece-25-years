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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('city', 8)->index()->nullable();
            $table->string('type', 16)->index();
            $table->unsignedBigInteger('flockler_id')->nullable()->index();
            $table->string('image_url')->nullable();
            $table->string('attachment')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
