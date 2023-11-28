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
        Schema::table('apprenant', function (Blueprint $table) {
            $table->string('matricule',30)->unique();
            $table->string('telephone',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apprenant', function (Blueprint $table) {
            $table->dropColumn('matricule');    
            $table->dropColumn('telephone');    
        });
    }
};
