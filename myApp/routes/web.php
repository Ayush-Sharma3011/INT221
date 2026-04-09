<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('friday',function(){
    return response()->json([
        'message'=>'Happy Friday',
        'status'=>200
    ]);
});

// Picture views routes
Route::get('/pictures', function () {
    return view('picfac');
})->name('pictures');

Route::get('/picture/1', function () {
    return view('pic1');
})->name('pic.1');

Route::get('/picture/2', function () {
    return view('pic2');
})->name('pic.2');

Route::get('/picture/3', function () {
    return view('pic3');
})->name('pic.3');

Route::get('/picture/4', function () {
    return view('pic4');
})->name('pic.4');

Route::get('/picture/5', function () {
    return view('pic5');
})->name('pic.5');

// Three Headings Routes
Route::get('/headings', function () {
    return view('headings');
})->name('headings');

Route::get('/heading1', function () {
    return view('heading1');
})->name('heading1');

// Heading 2 - Age verification
Route::get('/heading2', function () {
    return view('age-form');
})->name('heading2.form');

Route::post('/heading2/verify', function (Illuminate\Http\Request $request) {
    $age = $request->input('age');
    
    if ($age >= 18) {
        return redirect()->route('heading2.view', ['age' => $age]);
    } else {
        return view('age-not-allowed');
    }
})->name('heading2.verify');

Route::get('/heading2/view', function (Illuminate\Http\Request $request) {
    $age = $request->query('age');
    
    if (!$age || $age < 18) {
        return view('age-not-allowed');
    }
    
    return view('heading2', ['age' => $age]);
})->name('heading2.view');

Route::get('/heading3', function () {
    return view('heading3');
})->name('heading3');

require __DIR__.'/auth.php';

