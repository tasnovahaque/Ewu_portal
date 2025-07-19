<?php

use App\Models\Grade;
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('ewu_welcome');
    });
    Route::get('/home', function () {
        return view('app');
    });
    Route::get('/vaccination', function () {
        return view('vaccination');
    })->name('vaccination');
    Route::get('/advising', function () {
        return view('advising');
    })->name('advising');
    Route::get('/scedule', function () {
        return view('scedule');
    })->name('scedule');
    Route::get('/advisingRules', function () {
        return view('advisingRules');
    })->name('advisingRules');
    Route::get('/grade', function () {
        return view('grade');
    })->name('grade');
    Route::get('/drop', function () {
        return view('drop');
    })->name('drop');
    Route::get('/curriculumn', function () {
        return view('curriculumn');
    })->name('curriculumn');
    Route::get('/ledger', function () {
        return view('ledger');
    })->name('ledger');
    Route::get('/courses', function () {
        return view('courses');
    })->name('courses');
    Route::get('/degree', function () {
        return view('degree');
    })->name('degree');
    Route::get('/eval', function () {
        return view('eval');
    })->name('eval');
    Route::get('/convo', function () {
        return view('convo');
    })->name('convo');
    Route::get('/akash', function () {
        $grade = Grade::first();
        print_r($grade->grade);
    });

});
Route::get('/activate', function () {
    return view('activate');
})->name('activate');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
