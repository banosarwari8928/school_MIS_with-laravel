<?php

use App\Models\Designations;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    public $id ;
    public $designationData;
    public function update(Request $request , string $id){
        $this->id = $id ;
    } 
    public function mount(){
        $this->designationData = Designations::findOrFail($this->id);
    }
};
?>

<div>
    {{-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison --}}
</div>