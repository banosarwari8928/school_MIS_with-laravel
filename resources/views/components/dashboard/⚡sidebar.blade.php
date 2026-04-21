<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    {{-- He who is contented is rich. - Laozi --}}
     <div class="bg-gray-700 col-span-1  dark:bg-gray-800 overflow-hidden shadow-sm">
                 <h2 class="font-serif py-4 text-center bg-gray-700 text-2xl  text-white dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
        <div class="flex flex-col gap-4 min-h-screen h-fit">
            <div class="flex gap-2 px-4 pt-2">
                <i class="fas fa-circle-user"></i>
           <a href="/dashboard/employee">
              <h2 class=" text-xl  text-white  leading-tight">
            Employee
        </h2>
    </a>
            </div>
             <div class="flex gap-2 px-4 ">
                  <i class="fas fa-circle-user"></i>
             <a href="/dashboard/contract">
              <h2 class=" text-xl  text-white  leading-tight">
            Contract
        </h2>
    </a>
            </div>
             <div class="flex gap-2 px-4 ">
                <i class="fas fa-circle-user"></i>
             <a href="/dashboard/payroll">
              <h2 class=" text-xl  text-white  leading-tight">
            Payroll
               </h2>
             </a>
            </div>
             <div class="flex gap-2 px-4 ">
                 <i class="fas fa-circle-user"></i>
             <a href="/dashboard/salary">
              <h2 class=" text-xl  text-white  leading-tight">
            salary
        </h2>
    </a>
            </div>
        </div>
            </div>

</div>