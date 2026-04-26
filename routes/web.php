 <?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
// });
// Route::view('profile','profile')->middleware(['auth'])->name('profile');

//     Route::prefix("dashboard")->middleware(['auth', 'verified'])->group(function(){
//         Route::view('dashboard', 'dashboard')->name('dashboard');
//         Route::view("/emplyee","livewire.employee.index");
//         Route::view("/contract","liverwire.contract.index");
//         Route::view("/school","liverwire.school.index");
//         Route::view("/department","liverwire.department.index");
//         Route::view("/department","liverwire.designation.index");
//         Route::view("/salary","liverwire.salary.index");
//         Route::view("/payment","liverwire.payment.index");
//         Route::view("/payroll","liverwire.payroll.index"); 
        // Route::view('/','dashboard');
        // Route::view('/profile','profile');
    // });
// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });
// use App\Livewire\Cantract\Add as CantractAdd;
// use App\Livewire\Cantract\Edit as CantractEdit;
// use App\Livewire\Cantract\Index as CantractIndex;
// use App\Livewire\Dapartment\Add as DapartmentAdd;
// use App\Livewire\Dapartment\Edit as DapartmentEdit;
// use App\Livewire\Dapartment\Index as DapartmentIndex;
// use App\Livewire\Designation\Add as DesignationAdd;
// use App\Livewire\Designation\Edit as DesignationEdit;
// use App\Livewire\Designation\Index as DesignationIndex;
// use App\Livewire\Emploee\Add as EmploeeAdd;
// use App\Livewire\Emploee\Edit as EmploeeEdit;
// use App\Livewire\Emploee\Index as EmploeeIndex;
// use App\Livewire\Payment\Add as PaymentAdd;
// use App\Livewire\Payment\Edit as PaymentEdit;
// use App\Livewire\Payment\Index as PaymentIndex;
// use App\Livewire\Payroll\Add as PayrollAdd;
// use App\Livewire\Payroll\Edit as PayrollEdit;
// use App\Livewire\Payroll\Index as PayrollIndex;
// use App\Livewire\School\Add;
// use App\Livewire\School\Edit;
// use App\Livewire\School\Index;


Route::view('/', 'welcome');

Route::middleware(['auth' , 'verified'])->group(function(){
    Route::get('dashboard' , 'dashboard')->name('dashboard');
    Route::prefix('schoole')->name('schoole.')->group(function(){
        Route::get('index')->name('index');
        Route::get('add' )->name('add');
        Route::get('edit');
    });
    Route::prefix('department')->name('department')->group(function(){
        Route::get('index')->name('index');
        Route::get('add' )->name('add');
        Route::get('edit')->name('edit');
    });
    Route::prefix('contract')->name('contract')->group(function(){
        Route::get('index')->name('index');
        Route::get('add')->name('add');
        Route::get('edit')->name('edit');
    });
    Route::prefix('employee')->name('employee')->group(function(){
        Route::get('add')->name('add');
        Route::get('index')->name('index');
        Route::get('edit')->name('edit');
    });
    Route::prefix('payment')->name('payments')->group(function(){
        Route::get('index')->name('index');
        Route::get('add' )->name('add');
        Route::get('edit')->name('edit');
    });
    Route::prefix('payroll')->name('payroll')->group(function(){
        Route::get('add')->name('add');
        Route::get('index' )->name('index');
        Route::get('edit' , )->name('edit');
    });
    Route::prefix('designation')->name('designation')->group(function(){
        Route::get('index')->name('index');
        Route::get('add')->name('add');
        Route::get('edit')->name('edit');
    });
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::view("cantract" , 'livewire.cantract.index');
    Route::view('department' , 'livewire.dapartment.index');
    Route::view('designation' , 'livewire.designation.index');
    Route::view('employee' , 'livewire.employee.index');
    Route::view('payment' , 'livewire.payment.index');
    Route::view('payroll' , 'livewire.payroll.index');
    Route::view('school' , 'livewire.school.index');
});


