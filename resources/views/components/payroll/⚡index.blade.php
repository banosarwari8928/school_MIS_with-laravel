<?php

use App\Models\Payroll;
use Livewire\Component;

new class extends Component
{
    //
     public $payroll ;
    public function mount(){
        $this->payroll = Payroll::all();
    }
};
?>

<div>
    {{-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius --}}
</div>