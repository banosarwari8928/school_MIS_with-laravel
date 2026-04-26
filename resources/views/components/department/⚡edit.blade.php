<?php

use App\Models\Department;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
    public $id ;
    public $departmentData;
    public function update(Request $request,string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->departmentData = Department::findOrFail($this->id);
    }
};
?>

<div>
    {{-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius --}}
</div>