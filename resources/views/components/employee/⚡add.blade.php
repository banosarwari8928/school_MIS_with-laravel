<?php

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
     public $employee;
     public function mount(){
        $this->employee = new Employee();
     }
     public function Create(Request $request){
        $request->validate([
        "firstName" => "required|string|min:4",
        "LastName"=> "required|string|min:6",
        "tazkira"=> "required|integer",
        "email" => "required|string",
        "phone"=> "nullable|string|max:10",
        "designation_id"=> "required|integer"
        ]);
        $this->employee->Create([
        "firstName"=>$request->firstName,
        "LastName"=> $request->lastName,
        "tazkera"=> $request->tazkera,
        "gender"=> $request->gender,
        "email"=> $request->email,
        "phone" => $request->phone,
        "designation_id" =>$request->designation_id
        ]);
     }
};
?>

<div>
    {{-- The only way to do great work is to love what you do. - Steve Jobs --}}
</div>