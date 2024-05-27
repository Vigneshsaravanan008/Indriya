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
        Schema::create('volunteer_registrations', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("phone_no")->nullable();
            $table->string("whatsapp_no")->nullable();
            $table->string("email")->nullable();
            $table->string("emergency_contact_person_name")->nullable();
            $table->string("emergency_phone_no")->nullable();
            $table->string("dob")->nullable();
            $table->string("blood_group")->nullable();
            $table->string("city")->nullable();
            $table->string("other_city")->nullable();
            $table->string("volunteer_before")->nullable();
            $table->string("volunteer_name")->nullable();
            $table->string("volunteer_other_name")->nullable();
            $table->string("skills")->nullable();
            $table->string("available_week")->nullable();
            $table->longText("new_team_description")->nullable();
            $table->longText("why_volunteering_description")->nullable();
            $table->longText("suggestion_description")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_registrations');
    }
};
