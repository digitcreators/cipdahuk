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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_level_id')->constrained('academic_levels')->onDelete('cascade');
            $table->foreignId('deadline_id')->constrained('deadline')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('details')->nullable();
            $table->string('reference_style')->nullable();
            $table->string('ppt_slide')->nullable();
            $table->string('no_of_pages')->nullable();
            $table->string('poster')->nullable();
            $table->string('spacing')->nullable();
            $table->string('sources_to_be_cited')->nullable();
            $table->string('subject')->nullable();
            $table->string('type_of_paper')->nullable();
            $table->string('paper_topic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
