<?php

namespace App\Livewire\Avantages;

use Livewire\Component;
use App\Models\Avantage;
use Illuminate\Support\Facades\Storage;

use Livewire\WithPagination;


class ListAvantage extends Component
{
    use WithPagination;
    public $key;

    public function render(){

    $Query = Avantage::query();
    if(!is_null($this->key)){
        $Query->where('titre', 'like', '%'.$this->key.'%');
    }
    $avantages = $Query->paginate(30);
    $total = Avantage::count();
    
        return view('livewire.avantages.list-avantage', compact('avantages', 'total'));
    }


    
    public function delete($id)
    {
        $avantage = Avantage::find($id);
        if ($avantage) {
            $avantage->delete();
            session()->flash('info', 'Avantage supprimé avec succès');
        }
    }

}
