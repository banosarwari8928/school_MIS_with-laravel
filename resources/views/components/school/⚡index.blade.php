<?php

use App\Models\School;
use Livewire\Component;

new class extends Component
{
    //
    public $schools;
    public function mount(){
        // $schools = School();
        $this->schools = School::all();
    }
};
?>

<div>

</div>