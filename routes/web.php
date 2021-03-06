<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('home');
})->name('dash.home');

Route::get('/projects', function () {
    return view('projects.index');
})->name('dash.projects');

Route::get('/projects/detail', function () {
    return view('projects.detail');
})->name('dash.projects.detail');

Route::get('/goals', function () {
    return view('goals.index');
})->name('dash.goals');

Route::get('/leave', function () {
    return view('leave.index');
})->name('dash.leave');

Route::get('/teams', function () {
    return view('teams.index');
})->name('dash.teams');

Route::get('/payslip', function () {
    return view('payslip.index');
})->name('dash.payslip');

Route::get('/payslip/content', function () {
    return view('payslip.content');
})->name('dash.payslip.content');

Route::get('/settings', function () {
    return view('settings.index');
})->name('dash.settings');

Route::get('/notifications', function () {
    return view('notifications.index');
})->name('dash.notifications');