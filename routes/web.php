<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Manage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StaffController;



Route::get('/', [MainController::class, 'create_homepage' ])->name('homepage')->middleware('auth');
Route::post('/', [MainController::class, 'store_newCustomer' ])->middleware('auth');
// Route::get('/home', [MainController::class, 'create_mainhomepage' ]);

Route::get('/newcustomer', [MainController::class, 'create_newCustomer' ])->middleware('auth');
Route::post('/newcustomer', [MainController::class, 'store_newCustomer' ])->middleware('auth');

Route::get('/customer/noncustomer/visitor', [MainController::class, 'show_noncustomer' ])->name('visitor.show')->middleware('auth');
Route::post('/customer/noncustomer/visitor', [MainController::class, 'store_noncustomer' ])->middleware('auth');

Route::get('/existingcustomer/{customer_id}', [MainController::class, 'create_existingCustomer' ])->name('existingcustomer.show');
Route::post('/existingcustomer/{customer_id}', [MainController::class, 'store_existingCustomer' ])->middleware('auth');

Route::get('/existingcustomer/{customer_id}/details', [MainController::class, 'show_existingcustomerdetail' ])->name('existingcustomerdetail.show');

Route::get('/existingcustomer/{customer_id}/edit', [MainController::class, 'show_updateexistingCustomer' ])->name('updateexistingcustomer.show')->middleware('auth');
Route::put('/existingcustomer/{customer_id}/edit', [MainController::class, 'update_existingCustomer' ])->middleware('auth');


Route::get('/staff', [StaffController::class, 'view_staff' ])->name('staff.show')->middleware('auth');

Route::get('/manage/income/daily', [Manage::class, 'show_dailyincome' ])->middleware('auth');

Route::get('/customers/active', [MainController::class, 'active_customers' ])->middleware('auth');
Route::get('/customers/inactive', [MainController::class, 'inactive_customers' ])->middleware('auth');
Route::get('/manage/users', [Manage::class, 'show_users' ])->middleware('auth');
Route::get('/manage/overview', [Manage::class, 'show_overview' ])->middleware('auth');

Route::get('/newstaff', [StaffController::class, 'create_staff' ])->middleware('auth');
Route::post('/newstaff', [StaffController::class, 'store_staff' ]);

Route::get('/staff/existing/{id}', [StaffController::class, 'show_edit_staff' ])->name('editstaff.show');
Route::put('/staff/existing/{id}', [StaffController::class, 'edit_staff' ])->middleware('auth');

Route::get('/manage', [Manage::class, 'create_manage' ])->middleware('auth');

Route::get('/login', [UserController::class, 'create_login' ])->name('login');
Route::post('/login', [UserController::class, 'store_login' ]);

Route::post('/logout', [UserController::class, 'store_logout']);

Route::get('/register', [UserController::class, 'create_register' ]);
Route::post('/register', [UserController::class, 'store_register' ]);

