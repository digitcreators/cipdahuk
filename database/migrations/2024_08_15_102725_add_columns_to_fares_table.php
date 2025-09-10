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
        Schema::table('fares', function (Blueprint $table) {
            //
            $table->double('per_slide_price', 6, 2);
            $table->double('per_poster_price', 6, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fares', function (Blueprint $table) {
            //
        });
    }
};
