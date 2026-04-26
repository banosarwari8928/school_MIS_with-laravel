<?php

use App\Models\School;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
    public $school;
    public function mount(){
       $school = new School();
    }
    
    public function create(Request $request){
       $request->validate([
        'name'=>'required|string|min: 3',
        'whatsapp_link'=>'required|string|min: 9',
       ]);
       $this->school->create([
        'name'=>$request->name,
        'whatsapp_link'=>$request->whatsapp_link,
       ]);
    }
};
?>

<div>
    {{-- No surplus words or unnecessary actions. - Marcus Aurelius --}}
</div>