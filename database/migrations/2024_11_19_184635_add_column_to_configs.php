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
            $table->text('titre1_processus')->nullable();
            $table->text('titre2_processus')->nullable();

            $table->text('desc1_processus')->nullable();
            $table->text('desc2_processus')->nullable();

            $table->string('image_processus')->nullable();
            $table->string('image1_processus')->nullable();
            $table->string('image2_processus')->nullable();

          

            $table->text('titre1_impression')->nullable();
            $table->text('titre2_impression')->nullable();
            $table->text('titre3_impression')->nullable();
            $table->text('titre4_impression')->nullable();
            $table->text('titre5_impression')->nullable();
            $table->text('titre6_impression')->nullable();

            $table->text('desc1_impression')->nullable();
            $table->text('desc2_impression')->nullable();
            $table->text('desc3_impression')->nullable();
            $table->text('desc4_impression')->nullable();
            $table->text('desc5_impression')->nullable();
            $table->text('desc6_impression')->nullable();

            $table->string('image_impression')->nullable();
            $table->string('image1_impression')->nullable();
            $table->string('image2_impression')->nullable();
            $table->string('image3_impression')->nullable();
            $table->string('image4_impression')->nullable();
            $table->string('image5_impression')->nullable();
            $table->string('image6_impression')->nullable();


            $table->string('image1_avantage')->nullable();
            $table->string('image2_avantage')->nullable();

       


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn([
                'titre1_processus',
                'titre2_processus',
                'desc1_processus',
                'desc2_processus',
                'image_processus',
                'image1_processus',
                'image2_processus',

                'titre1_impression',
                'titre2_impression',
                'titre3_impression',
                'titre4_impression',
                'titre5_impression',
                'titre6_impression',
                'desc1_impression',
                'desc2_impression',
                'desc3_impression',
                'desc4_impression',
                'desc5_impression',
                'desc6_impression',
                'image_impression',
                'image1_impression',
                'image2_impression',
                'image3_impression',
            ]);
        });
    }
};
