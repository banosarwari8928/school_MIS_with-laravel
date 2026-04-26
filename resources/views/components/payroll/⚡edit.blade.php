<?php

use App\Models\Payroll;
use Illuminate\Http\Request;
use Livewire\Component;

new class extends Component
{
    //
     public $payroll;
    public $id ;
    public function update(Request $request , string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->payroll = Payroll::findOrFail($this->id);
    }
};
?>

<div>
    {{-- No surplus words or unnecessary actions. - Marcus Aurelius --}}
</div>