<?php

use App\Models\config;
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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('logoHeader')->nullable()->default(null);
            $table->string('telephone')->nullable()->default(null);
            $table->string('addresse')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);

            $table->string('icon')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);

            $table->integer("adherent")->nullable();
            $table->integer("coach")->nullable();
            $table->integer("tounoir")->nullable();
            $table->integer("seance")->nullable();
            

            $table->string("logocontact")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("instagram")->nullable();
            $table->string("youtube")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("fax")->nullable();

            $table->text('des_apropos')->nullable();
            $table->string('image_apropos')->nullable();
            $table->text('titre_apropos')->nullable();
            $table->string('photos')->nullable();

            $table->text('titre_apropos1')->nullable();
            $table->string('image_apropos1')->nullable();

            $table->text('titre_apropos2')->nullable();        
            $table->string('image_apropos2')->nullable();

            $table->text('titre_apropos3')->nullable();
            $table->string('image_apropos3')->nullable();

            $table->text('titre_apropos4')->nullable();
            $table->string('image_apropos4')->nullable();



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
            


            $table->timestamps();
        });


       // $config = new config();
       // $config->logo=null;
       // $config->save();


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
