<?php

namespace App\Livewire;

use App\Models\message;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Chat extends Component
{

    public $message;

    // public function store(Request $request){
    //     $request->validate([
    //         'message'=>'required|string'
    //     ]);
    // }

    public function send(){

        message::create([
            'user_id' => auth()->id(),
            'message'=>$this->message
        ]);

        $this->reset('message'); 

    $this->dispatch('messageSent'); 
        
    }

    
    public function render()
    {
        return view('livewire.chat',['mm'=>message::with('user')->latest()->take(20)->get()->reverse()]);
    }
}
