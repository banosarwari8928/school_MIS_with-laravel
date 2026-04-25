<?php

use App\Models\Salary;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

new class extends Component
{
    //
     public $salaryData;
     public $id;
     public function mount(){
       $this->salaryData = Salary::findOrFail($this->id);
    }
     
     public function update(Request $request, string $id){
       $this->id = $id;
    }
    
};
?>

<div>
    {{-- Simplicity is the ultimate sophistication. - Leonardo da Vinci --}}
</div>