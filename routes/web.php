<?php

use App\Livewire\Admin\Tickets\AdTicketCreate;
use App\Livewire\Admin\Tickets\AdTicketList;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('ticket', AdTicketList::class)->name('admin_ticket');
Route::get('ticket/create', AdTicketCreate::class)->name('admin_ticket_create');