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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->longText("short_description")->nullable();
            $table->longText("objective")->nullable();
            $table->longText("our_mission")->nullable();
            $table->longText("our_vission")->nullable();
            $table->string("image")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuses');
    }
};
