<?php

use App\Models\Department;
use Livewire\Component;

new class extends Component
{
    //
     public $departmint ;
    public function mount(){
        $this->departmint = Department::all();
    }
};
?>

<div>
    {{-- Simplicity is the ultimate sophistication. - Leonardo da Vinci --}}
</div>