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
        Schema::create('page_management', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->longText('meta_title');
            $table->longText('meta_keyword');
            $table->longText('meta_description');
            $table->longText('og_image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_management');
    }
};
