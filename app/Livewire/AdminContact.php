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
      $icon_sta1, $icon_sta12, $icon_sta2, $icon_sta22, $icon_sta3 ,$icon_sta32 , $icon_sta4 ,$icon_sta42 , $icon_sta5, $icon_sta52; 







       
    
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






        if($config->save()){
            //flash message
            session()->flash('info', 'Vos modifications ont été enregistrées.');
        }else{
            //flash message
            session()->flash('danger', 'Vos modifications n\'ont pas été enregistrées.');
        }
    }


}
