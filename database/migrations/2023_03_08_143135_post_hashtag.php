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
        Schema::create('post_hashtag', function (Blueprint $table) {
            $table->primary(['post_id', 'hashtag_id']);
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('hashtag_id')->unsigned();
            $table->timestamps();
            $table->foreign('post_id')
                ->references('id')
                ->on('posts');
            $table->foreign('hashtag_id')
                ->references('id')
                ->on('hashtags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_hashtag');
    }
};
