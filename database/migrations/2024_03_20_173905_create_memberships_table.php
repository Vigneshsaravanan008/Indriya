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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->longText("first_name")->nullable();
            $table->longText("last_name")->nullable();
            $table->longText("email")->nullable();
            $table->longText("phone_number")->nullable();
            $table->longText("gender")->nullable();
            $table->longText("location")->nullable();
            $table->longText("categories")->nullable();
            $table->longText("organization_name")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
