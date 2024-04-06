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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer("product_category_id");
            $table->string("name")->nullable();
            $table->string("slug")->nullable();
            $table->integer("status")->default(1);
            $table->string("image")->default(1);
            $table->longText("short_description")->nullable();
            $table->longText("description")->nullable();
            $table->decimal("price")->nullable();
            $table->longText("meta_title")->nullable();
            $table->longText("meta_keyword")->nullable();
            $table->longText("meta_description")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
