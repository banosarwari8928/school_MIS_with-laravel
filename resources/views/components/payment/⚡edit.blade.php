<?php

use App\Models\Payment;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
    
    public $id;
    public $paymentData;
    public function update(Request $request , string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->paymentData = Payment::findOrFail($this->id);
    }
};
?>

<div>
    {{-- Simplicity is the consequence of refined emotions. - Jean D'Alembert --}}
</div>