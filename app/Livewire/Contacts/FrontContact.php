<?php

namespace App\Livewire\Contacts;

use Livewire\Component;

class FrontContact extends Component
{

    
    public $email, $nom, $sujet, $message, $telephone, $contact,$age;
    public $end = false;

    public function mount($contact){
        if($contact){
            $this->contact = $contact;
            $this->nom = $contact->nom;
            $this->email = $contact->email;
           $this->sujet = $contact->sujet;
            $this->message = $contact->message;
            $this->age = $contact->age;
           
          
           
        }
    }

    private function resetInputFields(){
        $this->nom = '';
        $this->email = '';
        $this->sujet = '';
        $this->message = '';
        $this->age = '';
    }

    public function save()
    {
        $this->validate([
            'email' => 'required|email',
            'nom' => 'required|max:200|string',
         //   'sujet' => 'required|max:200|string',
            'message' => 'required|max:5000|string',
            'age' => 'required|max:200|numeric',
          //  'telephone' => 'required|max:20|string',
        ], [
            'email.required' => 'Veuillez entrer votre email',
            'nom.required' => 'Veuillez entrer votre nom',
            //'sujet.required' => 'Veuillez entrer votre sujet',
            'message.required' => 'Veuillez entrer votre message',
            'age.required' => 'Veuillez entrer votre age',
        ]);

        $contact = new Contact();
        $contact->email = $this->email;
        $contact->nom = $this->nom;
       $contact->sujet = $this->sujet;
        $contact->message = $this->message;
       $contact->age = $this->age;
     $contact->save();
     $this->resetInput();
     session()->flash('success', 'Votre message a été envoyé avec succès');
        
  
        /* if ($contact->save()) {
         
            session()->flash('success', 'Votre message a été envoyé avec succès');
        
  
            $this->resetInputFields();
           
            return;
        } else {
            session()->flash('error', 'Une erreur est survenue lors de l\'envoi de votre message');
            return;
        } */
    }
    public function resetInput()
    {
        $this->nom = '';
        $this->email = '';
        $this->sujet = '';
        $this->message = '';
        $this->age ='';
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'nom' => 'required|max:200|string',
           'sujet' => 'nullable|max:200|string',
            'message' => 'required|max:5000|string',
            'age' => 'required|max:200',
        ]);
  
        Contact::create($validatedData);

        session()->flash('message', 'Votre message a été envoyé avec succès');
        return redirect()->back();///->with ('message', __('Votre message a été envoyé avec succès'));
    }
    public function render()
    {
        return view('livewire.contacts.front-contact');
    }
}