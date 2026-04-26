<?php

use App\Models\School;
use Livewire\Component;

new class extends Component
{
    //
    public $schools;
    public function mount(){
      
        $this->schools = School::all();
    }
};
?>

<div>

</div>