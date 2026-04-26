<?php

use App\Models\Department;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
     public $department;
    public function mount(){
        $this->department = new Department();
    }
    public function create(Request $request){
        $request->validate([
              "name"=> "required|string|min:5",
        "school_id"=> "required|integer"
        ]);
        $this->department->create([
              "name"=> $request->name,
        "school_id"=> $request->school_id
        ]);
    }
};
?>

<div>
    {{-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius --}}
</div>