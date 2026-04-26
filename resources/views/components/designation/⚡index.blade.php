<?php

use App\Models\Designations;
use Livewire\Component;

new class extends Component
{
    //
    public $designation;
    public function mount(){
        $this->designation = Designations::all();
    }
};
?>

<div>
    {{-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh --}}
</div>