<?php

use Livewire\Component;

new class extends Component

    {
        public $open = null;
        
        public $faqs = [
            ['q' => 'What is oue school name?', 'a' => 'Sahrifi.'],
            ['q' => 'How many teaachers has our school?', 'a' => 'Rezaiee and.....'],
            ['q' => 'Is any woman teacher hear?', 'a' => 'Yes.'],
            ];
            
            public function toggle($i)
            {
                $this->open = $this->open === $i ? null : $i;
            }
    };
    ?>

<div class="max-w-2xl mx-auto mt-10 rounded-md shadow-lg p-7 bg-white">
    <h1 class=" text-center text-4xl text-brand font-poppins font-bold"> FAQ</h1>

    @foreach ($faqs as $i => $faq)

        <div class="py-4 border-b bg-tranparent border-gray-200 shadow-xs">

            <button
                wire:click="toggle({{ $i }})"
                class="w-full flex justify-between items-center text-left px-2"
            >
                <span class="text-gray-800 ">
                    {{ $faq['q'] }}
                </span>
                <span
                    class="w-14 h-7 flex items-center justify-center rounded-full  bg-bg border-gray-400 text-gray-700 text-xs"
                >
                    {{ $open === $i ? 'Hide' : 'Show' }}
                </span>

            </button>
            @if ($open === $i)
                <p class="mt-2 px-2 text-sm text-gray-500">
                    {{ $faq['a'] }}
                </p>
            @endif

        </div>

    @endforeach

</div>