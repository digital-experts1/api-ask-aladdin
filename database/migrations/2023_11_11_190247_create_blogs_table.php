<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('overview')->nullable();
            $table->longText('description');
            $table->string('banner')->nullable();
            $table->string('thumb')->nullable();
            $table->json('related_blogs')->nullable(); // Storing IDs or slugs as JSON
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('og_title')->nullable();
            $table->boolean('status')->default(1); // Assuming 1 for active, 0 for inactive
            $table->boolean('featured')->default(0); // Assuming 0 for not featured, 1 for featured
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
