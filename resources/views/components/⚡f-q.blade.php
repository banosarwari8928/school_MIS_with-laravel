 <?php

use Livewire\Component;

new class extends Component
{
    public $questions = [
    ["What is our school name?", "answer", false],
    ["How many teachers do we have?", "answer", false],
    ["What technics do we use?", "answer", false],
];
    //
   public function handleQ(){
    $this->questions[0] = !$this->questions[0];
}

};
?>
<div>
    <h1 class="text-center text-4xl">FAQ</h1>

    @foreach ($questions as $que)

        <p>
            {{ $que[0] }}
            <button  wire:click="handleQ()" class="font-bold cursor-pointer ">Answer</button>

            @if($que[2])
                <h1>
                    {{ $que[1] }}
                </h1>
            @endif
        </p>

    @endforeach

</div>