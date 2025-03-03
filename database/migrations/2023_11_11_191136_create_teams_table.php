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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('position');
            $table->longText('slug');
            $table->longText('overview')->nullable();
            $table->longText('description');
            $table->longText('banner')->nullable();
            $table->longText('thumb')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_keywords')->nullable();
            $table->longText('seo_description')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
