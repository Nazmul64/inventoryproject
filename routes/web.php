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
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ExpensessController;
use App\Http\Controllers\Backend\AttendenceController;
use App\Http\Controllers\Backend\SettingController;
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
    Route::get('/add-Salary', [AdvanceSalaricesController::class, 'added'])->name('add.advancesalary');
    Route::post('/add-Salary/store', [AdvanceSalaricesController::class, 'store'])->name('store.salary');
    Route::get('/index-Salary/show', [AdvanceSalaricesController::class, 'show'])->name('show.advancesalary');
    Route::get('/SalaryPay', [AdvanceSalaricesController::class, 'SalaryPay'])->name('pay.salary');
    Route::get('/SalaryPay/edit/{id}', [AdvanceSalaricesController::class, 'SalaryPayedit'])->name('pay.edit');
    Route::post('/SalaryPay/update/{id}', [AdvanceSalaricesController::class, 'SalaryPayupdate'])->name('pay.update');

 });
 Route::prefix('category')->group(function () {
    Route::get('/add-category', [CategoryController::class, 'added'])->name('add.category');
    Route::post('/add-category/store', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/add-category/index', [CategoryController::class, 'index'])->name('index.category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'categoryedit'])->name('edit.category');
    Route::post('/edit-category/update/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/delete-category/delete/{id}', [CategoryController::class, 'delete'])->name('delete.category');
 });

 Route::prefix('product')->group(function () {
    Route::get('/product', [ProductController::class, 'added'])->name('add.product');
    Route::post('/add-product/productstore', [ProductController::class, 'productstore'])->name('productstore.product');
    Route::get('/product/index', [ProductController::class, 'index'])->name('index.product');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('delete.product');
    Route::get('/product/view/{id}', [ProductController::class, 'view'])->name('view.product');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('update.product');
});

Route::prefix('expenses')->group(function () {
    Route::get('/add-expenses', [ExpensessController::class, 'Addexpenses'])->name('add.expenses');
    Route::post('store', [ExpensessController::class, 'expenses'])->name('storeexpenses.expenses');
    Route::get('todayexpenses', [ExpensessController::class, 'todayexpenses'])->name('todayexpenses.expenses');
    Route::get('lastmonth', [ExpensessController::class, 'lastmonth'])->name('lastmonthexpenses.expenses');
    Route::get('todayexpenses/edit/{id}', [ExpensessController::class, 'edit'])->name('editexpenses');
    Route::post('/update/{id}', [ExpensessController::class, 'updateexpenses'])->name('update.expenses');
    Route::get('/add-expenses/delete/{id}', [ExpensessController::class, 'delete'])->name('delete');
    Route::get('yearlay', [ExpensessController::class, 'yearlay'])->name('yearlay.expenses');

    // month
    Route::get('january', [ExpensessController::class, 'january'])->name('january.expenses');
    Route::get('February', [ExpensessController::class, 'February'])->name('February.expenses');
    Route::get('March', [ExpensessController::class, 'March'])->name('March.expenses');
    Route::get('April', [ExpensessController::class, 'April'])->name('April.expenses');
    Route::get('May', [ExpensessController::class, 'May'])->name('May.expenses');
    Route::get('June', [ExpensessController::class, 'June'])->name('June.expenses');
    Route::get('July', [ExpensessController::class, 'July'])->name('July.expenses');
    Route::get('August', [ExpensessController::class, 'August'])->name('August.expenses');
    Route::get('Septeber', [ExpensessController::class, 'Septeber'])->name('Septeber.expenses');
    Route::get('October', [ExpensessController::class, 'October'])->name('October.expenses');
    Route::get('November', [ExpensessController::class, 'November'])->name('November.expenses');
    Route::get('December', [ExpensessController::class, 'December'])->name('December.expenses');


});

Route::prefix('takeadendence')->group(function () {
    Route::get('/add-takeadendence', [AttendenceController::class, 'takeadendence'])->name('take.attendence');
    Route::post('/insert-takeadendence', [AttendenceController::class, 'insert'])->name('insert.attendence');
    Route::get('/all-takeadendence', [AttendenceController::class, 'allattendence'])->name('all.attendence');
    Route::get('/editattendence/{edit_date}', [AttendenceController::class, 'editattendence'])->name('edit.attendence');
    Route::post('/update-attendence', [AttendenceController::class, 'updateattendence'])->name('update.attendence');

});
Route::prefix('Settings')->group(function () {
    Route::get('/add-settings', [SettingController::class, 'setting'])->name('setting.added');
    Route::post('/store-settings', [SettingController::class, 'settingstore'])->name('setting.settingstore');
    Route::get('/settings-index', [SettingController::class, 'index'])->name('index.setting');
    Route::get('/settings-edit/{id}', [SettingController::class, 'edit'])->name('edit.setting');
    Route::post('/settings-update/{id}', [SettingController::class, 'update'])->name('update.setting');
});
