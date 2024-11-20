<?php

namespace App\Livewire\Avantages;


use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Avantage;



class AddAvantage extends Component
{

    use WithFileUploads;

    public $posts, $title, $body, $post_id;
    public $updateMode = false;
   

    public $titre, $photo,$photo2,$avantage,$description;

    
    public function mount($avantage){
        if($avantage){
            $this->avantage = $avantage;
            $this->titre = $avantage->titre;
            $this->description = $avantage->description;
           
            $this->photo2 = $avantage->photo;
           
        }
    }

    private function resetInputFields(){
        $this->titre = '';
        $this->description = '';
    }



    public function render()
    {
        return view('livewire.avantages.add-avantage');
    }



    
    

    //validation
    public function create()
    {
        $this->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string|Max:5000',
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp',
        ]);
        ;[
            'description.required' => 'La description doit avoir moins de 5000 caractères',
            'titre.required' => 'Veuillez entrer le titre ',
           'photo.required' => 'Veuillez  mettre une photo',
            //'adresse.required' => 'Veuillez entrer votre addresse',
      
          ];

       


        $avantage = new Avantage();
        $avantage->titre = $this->titre;
        $avantage->description = $this->description;
        
        $avantage->photo = $this->photo->store('avantages', 'public');
    
        $avantage->save();

        //reset input
        $this->resetInput();
       // $this->resetInputFields();


        //flash message
        session()->flash('success', 'Avantage ajoutée avec succès');
        return redirect()->route('avantage');
    }




    public function update_avantage(){
        if($this->avantage){
            $this->validate([
                'titre' => 'required|string',
                'description' => 'required|string',
              
              
                'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp',
               
            ]);



            $this->avantage->titre = $this->titre;
            $this->avantage->description = $this->description;
            

            if($this->photo){
                //delete old photo
                if ($this->avantage->photo) {
                    Storage::disk('public')->delete($this->avantage->photo);
                }
                $this->avantage->photo = $this->photo->store('avantages', 'public');
            }

      
            $this->avantage->save();
    
  
            $this->resetInput();
    
            return redirect()->route('avantages')->with('success',"avantage modifié avec succès");



        }

    }

    
    public function resetInput()
    {
        $this->titre = '';
        $this->description = '';
        $this->photo = '';
    }
}
