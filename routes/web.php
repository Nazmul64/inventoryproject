<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\EmployeesController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SuppliersController;
use App\Http\Controllers\Backend\AdvanceSalaricesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

  Route::get('/home', [HomeController::class, 'backendlayoutshome'])->name('backendlayoutshome');

Route::prefix('users')->group(function () {
   Route::get('/view', [UserController::class, 'view'])->name('user.view');
   Route::get('/add', [UserController::class, 'add'])->name('user.add');
   Route::post('/store', [UserController::class, 'store'])->name('user.store');
   Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
   Route::post('/user.update/{id}', [UserController::class, 'update'])->name('user.update');
   Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});

Route::prefix('profile')->group(function () {
   Route::get('/view', [ProfileController::class, 'view'])->name('profile.view');
   Route::get('/profile.edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::post('/profile.update/{id}', [ProfileController::class, 'edit'])->name('profile.update');
   Route::get('/profile/password/view/', [ProfileController::class, 'passwordview'])->name('profile.passwordview');
   Route::POST('/profile/password/update', [ProfileController::class, 'passwordupdate'])->name('profile.passwordupdate');
});
Route::prefix('employees')->group(function () {
    Route::get('/add-employees', [EmployeesController::class, 'add'])->name('add.employees');
    Route::post('/add-employees/store', [EmployeesController::class, 'store'])->name('store.employees');
    Route::get('/add-employees/view', [EmployeesController::class, 'view'])->name('view.employees');
    Route::get('/add-employees/edit/{id}', [EmployeesController::class, 'edit'])->name('edit.employees');
    Route::post('/add-employees/update/{id}', [EmployeesController::class, 'update'])->name('update.employees');
    Route::get('/add-employees/delete/{id}', [EmployeesController::class, 'delete'])->name('delete.employees');
    Route::get('/add-employees/viewdetails/{id}', [EmployeesController::class, 'deteailsview'])->name('deteailsview.employees');
 });

 Route::prefix('Customers')->group(function () {
    Route::get('/add-customers', [CustomerController::class, 'add'])->name('add.customers');
    Route::post('/add-customers/store',[CustomerController::class, 'store'])->name('store.customers');
    Route::get('/add-customers/index', [CustomerController::class, 'index'])->name('index.customers');
    Route::get('/add-customers/edit/{id}', [CustomerController::class, 'edit'])->name('edit.customers');
    Route::post('/add-customers/update/{id}', [CustomerController::class, 'update'])->name('update.customers');
    Route::get('/add-customers/delete/{id}', [CustomerController::class, 'delete'])->name('delete.customers');
    Route::get('/add-customers/view/{id}', [CustomerController::class, 'view'])->name('customers.view');
 });
 Route::prefix('suppliers')->group(function () {
    Route::get('/add-suppliers', [SuppliersController::class, 'add'])->name('add.suppliers');
    Route::post('/add-suppliers/store', [SuppliersController::class, 'store'])->name('store.suppliers');
    Route::get('/add-suppliers/index', [SuppliersController::class, 'index'])->name('index.suppliers');
    Route::get('/add-suppliers/edit/{id}', [SuppliersController::class, 'edit'])->name('edit.suppliers');
    Route::post('/add-suppliers/update/{id}', [SuppliersController::class, 'update'])->name('update.suppliers');
    Route::get('/add-suppliers/view/{id}', [SuppliersController::class, 'view'])->name('view.suppliers');
    Route::get('/add-suppliers/delete/{id}', [SuppliersController::class, 'delete'])->name('delete.suppliers');
 });
 Route::prefix('Advance')->group(function () {
    Route::get('/add-Salary', [AdvanceSalaricesController::class, 'added'])->name('add.salary');
    Route::post('/add-Salary/store', [AdvanceSalaricesController::class, 'store'])->name('store.salary');

 });
