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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer("post_type")->comment("1:Event;2:Campain");
            $table->string("title")->nullable();
            $table->string("slug")->nullable();
            $table->text("short_description")->nullable();
            $table->string("image")->nullable();
            $table->string("location")->nullable();
            $table->date("date")->nullable();
            $table->string("start_time")->nullable();
            $table->string("end_time")->nullable();
            $table->longText("meta_title")->nullable();
            $table->longText("meta_keyword")->nullable();
            $table->longText("meta_description")->nullable();
            $table->string("author")->nullable();
            $table->string("author_image")->nullable();
            $table->text("description")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
