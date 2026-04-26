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
        Schema::create('tech_skill_details', function (Blueprint $table) {
            $table->id();
            $table->integer('tech_skill_id');
            $table->index('tech_skill_id');
            $table->foreign('tech_skill_id')->references('id')->on('tech_skills')->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->string('pdf_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tech_skill_details');
    }
};
