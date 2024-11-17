<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    use HasFactory;
    protected $table = 'configs';

    protected $fillable = [
        'logo',
        'logoHeader',
        'telephone',
        'addresse',
        'email',
        'description',
        'frais',
        'icon',
        'logocontact',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'tiktok',
        'fax',
        'twitter',
        'adherent',
        'coach',
        'seance',
        'tounoir',
        'des_apropos',
        'photos',
        'image_apropos',
        'titre_apropos',
       

        
        'des_apropos',
        'image_apropos',
        'titre_apropos',
        'photos',
        'titre_apropos1',
        'image_apropos1',
    'titre_apropos2',      
    'image_apropos2',
        'titre_apropos3',
    'image_apropos3',

        'titre_apropos4',
        'image_apropos4',



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
         'titre_sta5',
        'number_sta5',
        'icon_sta5',
        
        
    ];
}