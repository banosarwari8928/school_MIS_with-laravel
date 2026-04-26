<?php

use App\Models\Contract;
use Livewire\Component;

new class extends Component
{
    //
     public $cantract ;
    public function mount(){
        $this->cantract  = Contract::all();
    }
};
?>

<div>
    {{-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama --}}
</div>