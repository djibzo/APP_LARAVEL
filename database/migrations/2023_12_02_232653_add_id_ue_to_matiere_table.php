<?php

use GuzzleHttp\Psr7\DroppingStream;
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
        Schema::table('matiere', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ue');
            $table->foreign('id_ue')->references('id')->on('ue');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matiere', function (Blueprint $table) {
            $table->dropColumn('id_ue');
        });
    }
};
