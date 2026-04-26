<?php

use App\Models\Payment;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
    
    public $payment;

    public function mount(){
        $this->payment = new Payment();
    }
    public function create(Request $request){
        $request->validate([
        "payment_mount"=> "required|integer",
        "emploee_id"=> "required|integer",
        "payroll_id"=> "required|integer",
        ]);
        $this->payment->create([
            "payment_mount"=> $request->payment_mount,
        "emploee_id" => $request->emploee_id,
        "payroll_id"=> $request->payroll_id,
        ]);
    }
};
?>

<div>
    {{-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin --}}
</div>