<?php

use App\Models\Salary;
use Livewire\Component;

new class extends Component
{
    //
    public $salary;
    public function mount(){
        $this->salary = Salary::all();
    }
};
?>

<div>
    {{-- Simplicity is the essence of happiness. - Cedric Bledsoe --}}
</div>