<?php

namespace App\Livewire;

use App\Models\config;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Validator;

class AdminContact extends Component
{
    use WithFileUploads;
    public $logo,$icon,$logo2,$icon2, $logoHeader, $logoHeader2, $telephone,$addresse, $email,$description,$fax,$logocontact,$logocontact2,$photos,$photos2,$titre_apropos,$des_apropos,
      $facebook, $twitter, $instagram, $youtube, $linkedin, $tiktok, $coach, $seance, $adherent, $tounoir,
      $titre_apropos1, $titre_apropos2, $titre_apropos3 , $titre_apropos4, $titre_apropos5,
      $image_apropos1, $image_apropos12, $image_apropos2, $image_apropos22, $image_apropos3,$image_apropos32 ,$image_apropos4, $image_apropos42, $image_apropos5 , $image_apropos52,
      $titre_sta1, $titre_sta2, $titre_sta3, $titre_sta4, $titre_sta5,
      $number_sta1, $number_sta2, $number_sta3, $number_sta4, $number_sta5,
      $icon_sta1, $icon_sta12, $icon_sta2, $icon_sta22, $icon_sta3 ,$icon_sta32 , $icon_sta4 ,$icon_sta42 , $icon_sta5, $icon_sta52,
      $titre1_processus,  $titre2_processus,
      $desc1_processus,
      $desc2_processus,
      $image_processus, $image_processus2,
      $image1_processus , $image12_processus,
      $image2_processus , $image22_processus,
    

      $titre1_impression,
      $titre2_impression,
      $titre3_impression,
      $titre4_impression,
      $titre5_impression,
      $titre6_impression,

      $desc1_impression,
      $desc2_impression,
      $desc3_impression,
      $desc4_impression,
      $desc5_impression,
      $desc6_impression,

      $image_impression ,$image_impression2,
      $image1_impression ,$image12_impression,
      $image2_impression, $image22_impression,
      $image3_impression, $image32_impression,
      $image4_impression ,$image42_impression,
      $image5_impression, $image52_impression,
      $image6_impression, $image62_impression,
      $image_entete_impression, $image_entete2_impression,


      $image1_avantage ,$image12_avantage,
      $image2_avantage ,$image22_avantage;
      
       
    
    public function mount(){
       $config = config::first()  ?? new Config;;
       // $this->config = Config::first() ?? new Config;
        $this->logo2 = $config->logo;
        $this->photos2 = $config->photos;
        $this->icon2 = $config->icon;
    //    $this->logoHeader = $config->logoHeader;
        $this->image_apropos12 =$config->image_apropos1;
        $this->image_apropos22 =$config->image_apropos2;
        $this->image_apropos32 =$config->image_apropos3;
        $this->image_apropos42 =$config->image_apropos4;
        $this->image_apropos52 =$config->image_apropos5;
        $this->image_processus2 =$config->image_processus;
        $this->image12_processus =$config->image1_processus;
        $this->image22_processus =$config->image2_processus;




        $this->image_impression =$config->image_impression2;
        $this->image_entete_impression =$config->image2_entete_impression;
        $this->titre1_impression =$config->titre1_impression;
        $this->titre2_impression =$config->titre2_impression;
        $this->titre3_impression =$config->titre3_impression;
        $this->titre4_impression =$config->titre4_impression;
        $this->titre5_impression =$config->titre5_impression;
        $this->titre6_impression =$config->titre6_impression;
        

        $this->desc1_impression =$config->desc1_impression;
        $this->desc2_impression =$config->desc2_impression;
        $this->desc3_impression =$config->desc3_impression;
        $this->desc4_impression =$config->desc4_impression;
        $this->desc5_impression =$config->desc5_impression;
        $this->desc6_impression =$config->desc6_impression;

        $this->titre1_processus =$config->titre1_processus;
        $this->titre2_processus =$config->titre2_processus;

        $this->desc1_processus =$config->desc1_processus;
        $this->desc2_processus =$config->desc2_processus;

        $this->image12_avantage = $config->image1_avantage;
        $this->image22_avantage = $config->image2_avantage;





        $this->icon_sta12 =$config->icon_sta1;
        $this->icon_sta22 =$config->icon_sta2;
        $this->icon_sta32 =$config->icon_sta3;
        $this->icon_sta42 =$config->icon_sta4;
        $this->icon_sta52 =$config->icon_sta5;
        $this->titre_sta1 = $config->titre_sta1;
        $this->titre_sta2 = $config->titre_sta2;
        $this->titre_sta3 = $config->titre_sta3;
        $this->titre_sta4 = $config->titre_sta4;
        $this->titre_sta5 = $config->titre_sta5;
        $this->number_sta1 = $config->number_sta1;
        $this->number_sta2 = $config->number_sta2;
        $this->number_sta3 = $config->number_sta3;
        $this->number_sta4 = $config->number_sta4;
        $this->number_sta5 = $config->number_sta5;
        $this->titre_apropos1 = $config->titre_apropos1;
        $this->titre_apropos2 = $config->titre_apropos2;
        $this->titre_apropos3 = $config->titre_apropos3;
        $this->titre_apropos4 = $config->titre_apropos4;
        $this->titre_apropos5 = $config->titre_apropos5;
        $this->titre_sta1 = $config->titre_sta1;
        $this->titre_sta2 = $config->titre_sta2;
        $this->titre_sta3 = $config->titre_sta3;
        $this->titre_sta4 = $config->titre_sta4;
        $this->titre_sta5 = $config->titre_sta5;

        $this->titre_apropos = $config->titre_apropos;
        $this->des_apropos = $config->des_apropos;
       
        //$this->logocontact= $config->logocontact;
        $this->logocontact2= $config->logocontact;
        $this->logoHeader2= $config->logoHeader;
        $this->email=$config->email;
        $this->telephone=$config->telephone;
        $this->fax=$config->fax;
        $this->addresse=$config->addresse;
        $this->description=$config->description;
        $this->facebook=$config->facebook;
        $this->twitter=$config->twitter;
        $this->instagram=$config->instagram;
        $this->youtube=$config->youtube;
        $this->linkedin=$config->linkedin;
        $this->tiktok=$config->tiktok;
        $this->coach=$config->coach;
        $this->seance=$config->seance;
        $this->adherent=$config->adherent;
        $this->tounoir=$config->tounoir;
     



    }

    public function render()
    {
        return view('livewire.admin-contact');
    }

    public function update_form(){
        // valid all form fields as nulable
        $this->validate([
            'logo' =>  'image|nullable',   // 1MB Max
            'photos.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'logoHeader' =>  'image|nullable|max:20024',   // 1MB Max
        'logocontact'=> 'nullable', // 1MB Max
            'icon' =>  'image|nullable',//
           
            'telephone' => 'nullable|numeric',
            'email' => 'nullable',
            'addresse' => 'nullable|string',
            'description' => 'nullable|string',
           //'logoHeader' => 'nullable',
            'fax' => 'nullable|numeric',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'coach' => 'nullable|numeric',
            'seance' => 'nullable|numeric',
            'adherent' => 'nullable|numeric',
            'tounoir' => 'nullable|numeric',


        ]);

        // update the user
        $config = config::first();
        if($this->logo){
            //delete old logo
            if ($this->logo2) {
                Storage::disk('public')->delete($this->logo2);
            }
            $config->logo= $this->logo->store('logo', 'public');
        }

        if($this->logoHeader){
            //delete old logo
            if ($this->logoHeader2) {
                Storage::disk('public')->delete($this->logoHeader2);
            }
            $config->logoHeader= $this->logoHeader->store('icon', 'public');
        }

        if($this->icon){
          
            if ($this->icon2) {
                Storage::disk('public')->delete($this->icon2);
            }
            $config->icon= $this->icon->store('icon', 'public');
        }

        if($this->icon_sta1){
          
            if ($this->icon_sta12) {
                Storage::disk('public')->delete($this->icon_sta12);
            }
            $config->icon_sta1= $this->icon_sta1->store('icon', 'public');
        }

        if($this->icon_sta2){
            //delete old logo
            if ($this->icon_sta22) {
                Storage::disk('public')->delete($this->icon_sta22);
            }
            $config->icon_sta2= $this->icon_sta2->store('icon', 'public');
        }

        if($this->icon_sta3){
            //delete old logo
            if ($this->icon_sta32) {
                Storage::disk('public')->delete($this->icon_sta32);
            }
            $config->icon_sta3= $this->icon_sta3->store('icon', 'public');
        }

        if($this->icon_sta4){
            //delete old logo
            if ($this->icon_sta42) {
                Storage::disk('public')->delete($this->icon_sta42);
            }
            $config->icon_sta4= $this->icon_sta4->store('icon', 'public');
        }

        if($this->icon_sta5){
            //delete old logo
            if ($this->icon_sta52) {
                Storage::disk('public')->delete($this->icon_sta52);
            }
            $config->icon_sta5= $this->icon_sta5->store('icon', 'public');
        }

      

        if($this->image_apropos1){
            //delete old logo
            if ($this->image_apropos12) {
                Storage::disk('public')->delete($this->image_apropos12);
            }
            $config->image_apropos1= $this->image_apropos1->store('image', 'public');
        }

        if($this->image_apropos2){
            //delete old logo
            if ($this->image_apropos22) {
                Storage::disk('public')->delete($this->image_apropos22);
            }
            $config->image_apropos2= $this->image_apropos2->store('image', 'public');
        }

        if($this->image_apropos3){
            //delete old logo
            if ($this->image_apropos32) {
                Storage::disk('public')->delete($this->image_apropos32);
            }
            $config->image_apropos3= $this->image_apropos3->store('image', 'public');
        }

        if($this->image_apropos4){
            //delete old logo
            if ($this->image_apropos42) {
                Storage::disk('public')->delete($this->image_apropos42);
            }
            $config->image_apropos4= $this->image_apropos4->store('image', 'public');
        }

        if($this->image_apropos5){
            //delete old logo
            if ($this->image_apropos52) {
                Storage::disk('public')->delete($this->image_apropos52);
            }
            $config->image_apropos5= $this->image_apropos5->store('image', 'public');
        }

        if($this->image_processus){
            //delete old logo
            if ($this->image_processus2) {
                Storage::disk('public')->delete($this->image_processus2);
            }
            $config->image_processus= $this->image_processus->store('image', 'public');
        }

        if($this->image1_processus){
            //delete old logo
            if ($this->image12_processus) {
                Storage::disk('public')->delete($this->image12_processus);
            }
            $config->image1_processus= $this->image1_processus->store('image', 'public');
        }

        if($this->image2_processus){
            //delete old logo
            if ($this->image22_processus) {
                Storage::disk('public')->delete($this->image22_processus);
            }
            $config->image2_processus= $this->image2_processus->store('image', 'public');
        }


        if($this->image_impression){
            //delete old logo
            if ($this->image_impression2) {
                Storage::disk('public')->delete($this->image_impression2);
            }
            $config->image_impression= $this->image_impression->store('image', 'public');
        }

        if($this->image1_impression){
            //delete old logo
            if ($this->image12_impression) {
                Storage::disk('public')->delete($this->image12_impression);
            }
            $config->image1_impression= $this->image1_impression->store('image', 'public');
        }

        if($this->image2_impression){
            //delete old logo
            if ($this->image22_impression) {
                Storage::disk('public')->delete($this->image22_impression);
            }
            $config->image2_impression= $this->image2_impression->store('image', 'public');
        }

        if ($this->image_entete_impression) {
            if ($this->image_entete2_impression) {
                Storage::disk('public')->delete($this->image_entete2_impression);
            }
            $config->image_entete_impression= $this->image_entete_impression->store('image', 'public');

        }

        if($this->image3_impression){
            //delete old logo
            if ($this->image32_impression) {
                Storage::disk('public')->delete($this->image32_impression);
            }
            $config->image3_impression= $this->image3_impression->store('image', 'public');
        }

        if($this->image4_impression){
            //delete old logo
            if ($this->image42_impression) {
                Storage::disk('public')->delete($this->image42_impression);
            }
            $config->image4_impression= $this->image4_impression->store('image', 'public');
        }

        if($this->image5_impression){
            //delete old logo
            if ($this->image52_impression) {
                Storage::disk('public')->delete($this->image52_impression);
            }
            $config->image5_impression= $this->image5_impression->store('image', 'public');
        }

        if($this->image6_impression){
            //delete old logo
            if ($this->image62_impression) {
                Storage::disk('public')->delete($this->image62_impression);
            }
            $config->image6_impression= $this->image6_impression->store('image', 'public');
        }

        if($this->image1_avantage){
            //delete old logo
            if ($this->image12_avantage) {
                Storage::disk('public')->delete($this->image12_avantage);
            }
            $config->image1_avantage= $this->image1_avantage->store('image', 'public');
        }

        if($this->image2_avantage){
            //delete old logo
            if ($this->image22_avantage) {
                Storage::disk('public')->delete($this->image22_avantage);
            }
            $config->image2_avantage= $this->image2_avantage->store('image', 'public');
        }

       
       



        




        if($this->logocontact){
            //delete old logo
            if ($this->logocontact2) {
                Storage::disk('public')->delete($this->logocontact2);
            }
            $config->logocontact= $this->logocontact->store('logocontact', 'public');
        }
/* 
        if ($this->photos) {
            $photosPaths = [];
            foreach ($this->photos as $photo) {
                $photosPaths[] = $photo->store('produits', 'public');
            }
          

            $this->config->photos = json_encode($photosPaths);
        }  */

   if ($this->photos) {
            $photosPaths = [];
            foreach ($this->photos as $photo) {
                $photosPaths[] = $photo->store('apropos', 'public');
            }
            $config->photos = json_encode($photosPaths);
        }
    
        $config->telephone = $this->telephone;
        $config->fax = $this->fax;
        $config->email = $this->email;
        $config->addresse = $this->addresse;
        $config->description = $this->description;
        $config->facebook = $this->facebook;
        $config->twitter = $this->twitter;
        $config->instagram = $this->instagram;
        $config->youtube = $this->youtube;
        $config->linkedin = $this->linkedin;
        $config->tiktok = $this->tiktok;
        $config->coach = $this->coach;
        $config->seance = $this->seance;
        $config->adherent = $this->adherent;
        $config->tounoir = $this->tounoir;
        $config->titre_apropos= $this->titre_apropos;
        $config->des_apropos = $this->des_apropos;

        $config->titre_apropos1= $this->titre_apropos1;
        $config->titre_apropos2= $this->titre_apropos2;
        $config->titre_apropos3= $this->titre_apropos3;
        $config->titre_apropos4= $this->titre_apropos4;
      //  $config->titre_apropos5= $this->titre_apropos5;

        $config->titre_sta1 = $this->titre_sta1;
        $config->titre_sta2 = $this->titre_sta2;
        $config->titre_sta3 = $this->titre_sta3;
        $config->titre_sta4 = $this->titre_sta4;
        $config->titre_sta5 = $this->titre_sta5;

        $config->number_sta1 = $this->number_sta1;
        $config->number_sta2 = $this->number_sta2;
        $config->number_sta3 = $this->number_sta3;
        $config->number_sta4 = $this->number_sta4;
        $config->number_sta5 = $this->number_sta5;

        $config->titre1_impression = $this->titre1_impression;
        $config->titre2_impression = $this->titre2_impression;
        $config->titre3_impression = $this->titre3_impression;
        $config->titre4_impression = $this->titre4_impression;
        $config->titre5_impression = $this->titre5_impression;
        $config->titre6_impression = $this->titre6_impression;

        $config->desc1_impression = $this->desc1_impression;
        $config->desc2_impression = $this->desc2_impression;
        $config->desc3_impression = $this->desc3_impression;
        $config->desc4_impression = $this->desc4_impression;
        $config->desc5_impression = $this->desc5_impression;
        $config->desc6_impression = $this->desc6_impression;

        $config->titre1_processus = $this->titre1_processus;
        $config->titre2_processus = $this->titre2_processus;
        $config->desc1_processus = $this->desc1_processus;
        $config->desc2_processus = $this->desc2_processus;
       // $config->titre3_processus = $this->titre3_processus;
       // $config->titre4_processus = $this->titre4_processus;
      //  $config->titre5_processus = $this->titre5_processus;
      







        if($config->save()){
            //flash message
            session()->flash('info', 'Vos modifications ont été enregistrées.');
        }else{
            //flash message
            session()->flash('danger', 'Vos modifications n\'ont pas été enregistrées.');
        }
    }


}
