<?php

use App\Http\Controllers\DbController;
use App\Http\Controllers\Empolyeecontroller;
use App\Http\Controllers\FileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::method(url,[ControllerClass,'function]);

// Route::get('/', [WebController::class, 'homePage'])->name('web.home');

// Route::get('about', [WebController::class, 'aboutPage'])->name('web.about');

// Route::get('check', [WebController::class, 'check'])->name('check');

// Route::get('controller', [WebController::class, 'count']);

// // Route::get('year',[WebController::class,'year']);

// Route::get('year', function () {
//     $num = 11;
//     if ($num % 4 == 0) {
//         return 'its a leap year';
//     } else {
//         return 'not a leap year';
//     }
// });
// Route::get('number', [WebController::class, 'ducknumber']);



// Route::get('course', function () {
//     return view('pages.course');
// });

// Route::get('service', function () {
//     return view('pages.service');
// });

// Route::get('table', [WebController::class, 'printTable']);

// Route::get('data', [WebController::class, 'datatable'])->name('datatables');

// Route::get('pages', [WebController::class, 'table2'])->name('pages');


// Route::get('add/record', [Webcontroller::class, 'addRecordPage'])->name('record.add');
// Route::post('add/record', [Webcontroller::class, 'addRecord'])->name('record.add');


// Route::get('addform', [WebController::class, 'addforms'])->name('addnewforms');
// Route::post('addforms', [WebController::class, 'addnewforms'])->name('addnewforms');



// MVC


// Route-------------->|View

//Route-----Logical Layer-----------View
// Route-----|Controller---------=-View--UI


// Now  Its turn to learn the MVC Data Layer
// Route::get('students/get', [StudentController::class, 'studentList']);

// Route::get('lists/get',[StudentController::class,'studentdata']);

// Route::get('add',[WebController::class,'addpic',])->name('getform');
// Route::post('addsum',[WebController::class,'addwrite',])->name('getadd');


// Route::get('databases',[WebController::class,'datafill']);

// Route::get('personList',[DbController::class,'index']);

// Route::get('subjects',[FileController::class,'subject']);


// Route::get('/', [Empolyeecontroller::class, 'index']);

// Route::get('employee/index', [Empolyeecontroller::class, 'index'])->name('employee.index');
// Route::get('employee/create', [Empolyeecontroller::class, 'create'])->name('employee.create');
// Route::post('employee/store', [Empolyeecontroller::class, 'store'])->name('employee.store');
// Route::get('employee/edit/{id}', [Empolyeecontroller::class, 'edit'])->name('employee.edit');
// Route::put('employee/update/{id}', [Empolyeecontroller::class, 'update'])->name('employee.update');
// // Route::delete('employee/delete/{id}', [Empolyeecontroller::class, 'destroy'])->name('employee.delete');
// Route::get('employee/delete/{id}', [Empolyeecontroller::class, 'destroy'])->name('employee.delet');

Route::get('student',[StudentsController::class,'students']);
Route::post('student',[StudentsController::class,'data']);


