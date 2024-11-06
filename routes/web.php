<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookIssueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutherController;

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/', [dashboardController::class, 'index'])->name('master');

Route::resource('/auther',AutherController::class);

Route::resource('/publisher',PublisherController::class);

Route::resource('/category',CategoryController::class);

Route::resource('/book',BookController::class);

Route::resource('/student',StudentController::class);

Route::get('/book_issue', [BookIssueController::class, 'index'])->name('book_issued');
Route::get('/book-issue/create', [BookIssueController::class, 'create'])->name('book_issue.create');
Route::get('/book-issue/edit/{id}', [BookIssueController::class, 'edit'])->name('book_issue.edit');
Route::post('/book-issue/update/{id}', [BookIssueController::class, 'update'])->name('book_issue.update');
Route::post('/book-issue/delete/{id}', [BookIssueController::class, 'destroy'])->name('book_issue.destroy');
Route::post('/book-issue/create', [BookIssueController::class, 'store'])->name('book_issue.store');  


Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
Route::get('/reports/Date-Wise', [ReportsController::class, 'date_wise'])->name('reports.date_wise');
Route::post('/reports/Date-Wise', [ReportsController::class, 'generate_date_wise_report'])->name('reports.date_wise_generate');
Route::get('/reports/monthly-Wise', [ReportsController::class, 'month_wise'])->name('reports.month_wise');
Route::post('/reports/monthly-Wise', [ReportsController::class, 'generate_month_wise_report'])->name('reports.month_wise_generate');
Route::get('/reports/not-returned', [ReportsController::class, 'not_returned'])->name('reports.not_returned');


Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::post('/setting', [SettingController::class, 'update'])->name('setting');