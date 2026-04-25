<?php

use App\Models\School;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

new class extends Component
{
    //
     public function mount(){
       $school = new School();
    }
     public $id;
     public function update(Request $request, string $id){
       $this->id = $id;
    }
};
?>

<div>
    {{-- Simplicity is the ultimate sophistication. - Leonardo da Vinci --}}
</div>