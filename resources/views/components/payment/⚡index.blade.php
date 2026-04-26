<?php

use App\Models\Payment;
use Livewire\Component;

new class extends Component
{
    //
     public $payment;
    public function mount(){
        $this->payment = Payment::all();
    }
};
?>

<div>
    {{-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin --}}
</div>