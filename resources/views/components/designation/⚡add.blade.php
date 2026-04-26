<?php

use App\Models\Designations;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
     public $Designation ;
    public function mount(){
        $this->Designation = new Designations();
    }
    public function create(Request $request){
        $request->validate([
             "name"=> "required|string|min:3",
        "dep_id"=> "required|integer"
        ]);
        $this->Designation->create([
             "name"=> $request->name,
        "dep_id"=> $request->dep_id
        ]);
    }
};
?>

<div>
    {{-- It is never too late to be what you might have been. - George Eliot --}}
</div>