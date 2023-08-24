<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RolesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $role = Role::create(['name' => 'writer']);
    // $permission = Permission::create(['name' => 'edit articles']);
    // $permission->assignRole($role);
    $user = User::first();
    $permissionNames = $user->getPermissionNames();
    //dd($permissionNames);
    //  $user->givePermissionTo('edit articles');
    //dd($user->hasPermissionTo('edit articles'));
    //  $role->givePermissionTo($permission);
    return view('welcome');
});


Route::resource('roles', RolesController::class)->except('show');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/inbox', [AdminController::class, 'inbox'])->name('inbox');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan');
    Route::get('/events', [AdminController::class, 'events'])->name('events');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/golongan', [AdminController::class, 'golongan'])->name('golongan');
    Route::get('/template', [AdminController::class, 'template'])->name('template');
    Route::get('/jabatan', [AdminController::class, 'jabatan'])->name('jabatan');
    Route::get('/sbm', [AdminController::class, 'sbm'])->name('sbm');
    Route::get('/rkakl', [AdminController::class, 'rkakl'])->name('rkakl');
});

require __DIR__ . '/auth.php';
