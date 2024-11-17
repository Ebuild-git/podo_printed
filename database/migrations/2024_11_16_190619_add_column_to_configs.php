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
        
          

        
            $table->text('titre_sta1')->nullable();
            $table->integer('number_sta1')->nullable();
            $table->string('icon_sta1')->nullable();

            $table->text('titre_sta2')->nullable();
            $table->integer('number_sta2')->nullable();
            $table->string('icon_sta2')->nullable();

            $table->text('titre_sta3')->nullable();
            $table->integer('number_sta3')->nullable();
            $table->string('icon_sta3')->nullable();

            $table->text('titre_sta4')->nullable();
            $table->integer('number_sta4')->nullable();
            $table->string('icon_sta4')->nullable();

            $table->text('titre_sta5')->nullable();
            $table->integer('number_sta5')->nullable();
            $table->string('icon_sta5')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn([
                'number1',
                'number2',
                'number3',
                'number4',
                'titre_apropos5',
                'number5',
                'image_apropos5',
                'titre_sta1',
                'number_sta1',
                'icon_sta1',
                'titre_sta2',
                'number_sta2',
                'icon_sta2',
                'titre_sta3',
                'number_sta3',
                'icon_sta3',
                'titre_sta4',
                'number_sta4',
                'icon_sta4',
            ]);
        });
    }
};
