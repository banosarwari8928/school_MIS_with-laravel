<?php

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
     public $id ;
    public $employeeData;
    public function update(Request $request , string $id){
        $this->id = $id ;
    }
    public function mount(){
        $this->employeeData = Employee::findOrFail($this->id);
    }
    //
};
?>

<div>
    {{-- You must be the change you wish to see in the world. - Mahatma Gandhi --}}
</div>