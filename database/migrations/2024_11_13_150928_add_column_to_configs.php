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
        Schema::table('configs', function (Blueprint $table) {
            $table->text('titre_apropos1')->nullable();
            $table->string('image_apropos1')->nullable();

            $table->text('titre_apropos2')->nullable();        
            $table->string('image_apropos2')->nullable();

            $table->text('titre_apropos3')->nullable();
            $table->string('image_apropos3')->nullable();

            $table->text('titre_apropos4')->nullable();
            $table->string('image_apropos4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn(['titre_apropos1', 'image_apropos1', 'titre_apropos2', 'image_apropos2', 'titre_apropos3', 'image_apropos3', 'titre_apropos4', 'image_apropos4']);
        });
    }
};
