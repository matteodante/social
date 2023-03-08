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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->text('content', 5000);
            $table->enum('media_type', ['image', 'video', 'audio', 'sale'])->nullable();
            $table->string('media_url', 2000)->nullable();
            $table->string('media_thumbnail_url', 2000)->nullable();
            $table->decimal('location_lat', 10, 8)->nullable();
            $table->decimal('location_lng', 11, 8)->nullable();
            $table->string('location_name', 255)->nullable();
            $table->string('language', 255)->nullable();
            $table->enum('sentiment', ['positive', 'negative', 'neutral', 'mixed'])->nullable();
            $table->boolean('is_pinned')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->boolean('is_edited')->default(false);
            $table->boolean('is_sensitive')->default(false);
            $table->unsignedInteger('likes_count')->default(0);
            $table->unsignedInteger('retweets_count')->default(0);
            $table->unsignedInteger('comments_count')->default(0);
            $table->unsignedInteger('views_count')->default(0);
            $table->unsignedInteger('shares_count')->default(0);
            $table->text('tags')->nullable();
            $table->text('mentions')->nullable();
            $table->text('hashtags')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('expire_at')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_promoted')->default(false);
            $table->decimal('score', 8, 4)->nullable();
            $table->timestamps();


            $table->index('user_id', 'location_name');
            $table->fullText('content');

            $table->foreign('user_id')->references('id')->on('users');
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
