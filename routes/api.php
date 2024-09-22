<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DeleteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//// Start of Auth Routes
//
//
//
//Route::post('/login',[LoginController::class,'login'])->name('login');
//
//Route::post('/logout', function (){
//    Auth::logout();
//    return redirect('/login');
//})->name('logout');
//
//// end of Auth Routes
//
///*-------------------------------------------------------------*/
//// Start of users Routes
//
//Route::get('/users',[UserController::class,'index'])->name('users')->middleware('admin');
//
//Route::get('/user-pdf/{id}',[PdfController::class,'downloadPDF'])->name('pdf.download')->middleware('admin');
//
//// end of users Routes
///*-------------------------------------------------------------*/
//// Start of notifications Routes
//
//Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
//
//Route::get('/notify-user/{id}',[NotificationController::class,'create'])->name('notifications.create')->middleware('admin');
//
//Route::post('/admin/notify_user/{id}', [NotificationController::class, 'save'])->name('notifications.save')->middleware('admin');
//
//// end of notifications Routes
///*-------------------------------------------------------------*/
//// Start of tickets Routes
//
//
//Route::post('/create_ticket',[TicketController::class,'save'])->name('tickets.save');
//
//Route::get('/tickets/{id}', [TicketController::class, 'view'])->name('ticket.view');
//
//// end of tickets Routes
//
///*-------------------------------------------------------------*/
//// Start of comments Routes
//
//Route::post('/comments/save/{id}', [CommentController::class, 'save'])->name('comments.save');
//
//Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
//
//// end of comments Routes
///*-------------------------------------------------------------*/
//
//Route::get('/delete-item',[DeleteController::class,'delete'])->middleware('admin');

