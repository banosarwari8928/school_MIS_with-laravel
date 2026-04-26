<?php

use App\Models\School;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
      public $id ;
    public $schoolInfo ;
    public function update(Request $request , string $id){
        $this->id = $id ;
    }
    public function mount(){
        $this->schoolInfo = School::findOrFail($this->id);
    }
};
?>

<div>
    {{-- Simplicity is the ultimate sophistication. - Leonardo da Vinci --}}
</div>