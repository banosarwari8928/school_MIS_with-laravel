<?php

use App\Models\Payroll;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    public $payroll;
    public function mount(){
        $this->payroll = new Payroll();
    }
    public function create(Request $request){
        $request->validate([
             "year"=>"required|date",
        "month"=> "required|date",
        "school_id"=> "required|integer",
        ]);
        $this->payroll->create([
            "Year"=> $request->year,
            "month"=> $request->month,
            "school_id"=> $request->school_id,
        ]);
    }

};
?>

<div>
    {{-- Smile, breathe, and go slowly. - Thich Nhat Hanh --}}
</div>