<?php

use App\Models\Salary;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

new class extends Component
{
    //
    public $salary;

    public function mount(){
       $salary = new Salary();
    }
    
    public function create(HttpRequest $request){
       $request->validate([
        'gross_salary'=>'required|integer',
        'employee_id'=>'required|integer',
        'payroll_id'=>'required|integer',
       ]);
       $this->salary->create([
        'gros_salary'=>$request->gros_salary,
        'employee_id'=>$request->employee_id,
        'payroll_id'=>$request->payroll_id,
       ]);
    }
};
?>

<div>
    {{-- Be present above all else. - Naval Ravikant --}}
</div>