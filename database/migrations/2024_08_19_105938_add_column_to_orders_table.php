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
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->after('id');
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade')->after('user_id');
            $table->string('academic')->nullable()->after('paper_topic');
            $table->string('deadline')->nullable()->after('academic');
            $table->string('price_per_page')->nullable()->after('deadline');
            $table->string('price_per_slide')->nullable()->after('price_per_page');
            $table->string('price_per_poster')->nullable()->after('price_per_slide');
            $table->string('total_price')->nullable()->after('price_per_poster');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
