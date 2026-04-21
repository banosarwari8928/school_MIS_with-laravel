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


<div class="max-w-6xl mx-auto felx flex-col text-center pt-4 bg-white mt-6">
    <div class="w-full grid grid-cols-2 gap-2 justify-between " >
        <div class="w-full col-span-1 rounded-lg ">
            <h1 class="text-2xl md:text-4xl lg:text-7xl text-brand py-3 px-4 font-serif">Frequently</h1>
            <h1 class="text-2xl md:text-4xl lg:text-7xl text-brand py-3 px-4 font-serif"> Ask Qestion</h1>
    <p class="font-meduim pt-6">The Thinges You Need To Know</p>
        </div>
    <div class=" w-full col-span-1 rounded-lg bg-white">
         <h1 class="text-xl md:text-2xl lg:text-3xl text-brand px-4 font-serif">FAQ</h1>
    @foreach ($this->faq as $q=>$value )
    <div wire:key="{{ $q }}" class = "flex flex-col w-fit items-center mb-2 border-0  border-b-2">
        <div class="flex items-center p-4 justify-center">
              <h1 class="text-md">{{ $value["Q"]}}</h1>
      <i class="cursor-pointer" wire:click ="toggle({{ $q }})">⬇️</i>
        </div>
    @if ($q ===$this->Qindex)
        <p class="pb-2">{{ $value["A"]}}</p>
    @endif
    </div>
    @endforeach
    </div>
    </div>
   <script>
    
   </script>
</div>
