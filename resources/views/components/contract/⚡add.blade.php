<?php

use App\Models\Contract;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
    public $cantract;
    public function mount(){
        $this->cantract = new Contract();
    }
    public function create(Request $request){
        $request->validate([
             "start_date"=> "required|date",
        "end_date" =>"required|date",
        "employee-id"=> "required|integer",
        "designations-id"=> "required|integer",
        "hire_type"=>"nullable|string"
        ]);
        $this->cantract->create([
             "start_date"=> now(),
        "end_date"=> $request->endDate,
        "employee_id"=> $request->employee_id,
        "designations-id"=> $request->designations_id,
        "hire_type" => $request->hire_type
        ]);
    }
};
?>

<div>
    {{-- Order your soul. Reduce your wants. - Augustine --}}
</div>