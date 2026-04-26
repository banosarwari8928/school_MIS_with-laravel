<?php

use App\Models\Employee;
use Livewire\Component;

new class extends Component
{
    //
     public $emploeey = null ;
    public function mount(){
        $this->emploeey = Employee::all();
    }
};
?>

<div>
    {{-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius --}}
</div>