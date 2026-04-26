<?php

use Livewire\Component;

new class extends Component
{
    //
     public $departmint ;
    public function mount(){
        $this->departmint = departmint::all();
    }
};
?>

<div>
    {{-- Simplicity is the ultimate sophistication. - Leonardo da Vinci --}}
</div>