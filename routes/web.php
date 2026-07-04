<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Models\Feedback;

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');


/*
|--------------------------------------------------------------------------
| LANGUAGE SWITCH
|--------------------------------------------------------------------------
*/
Route::get('/lang/{locale}', function ($locale) {

    $allowedLocales = ['en', 'sw', 'de', 'nl'];

    if (!in_array($locale, $allowedLocales)) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();

})->name('lang.switch');


/*
|--------------------------------------------------------------------------
| HOME PAGE
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.home');
})->name('home');


/*
|--------------------------------------------------------------------------
| ABOUT PAGE
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    return view('pages.about');
})->name('about');


/*
|--------------------------------------------------------------------------
| USER DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| FEEDBACK SYSTEM (USER SIDE)
|--------------------------------------------------------------------------
*/
Route::post('/feedback', function (Request $request) {

    $request->validate([
        'name' => 'required',
        'message' => 'required',
    ]);

    Feedback::create([
        'name' => $request->name,
        'message' => $request->message,
        'status' => 'pending',
    ]);

    return redirect()->back()->with('success', 'Feedback sent successfully!');

})->name('feedback.store');


/*
|--------------------------------------------------------------------------
| ADMIN FEEDBACK SYSTEM
|--------------------------------------------------------------------------
*/
Route::get('/admin/feedback', function () {

    $feedbacks = Feedback::latest()->get();

    return view('admin.feedback', compact('feedbacks'));

})->middleware(['auth', 'admin'])->name('feedback.index');


Route::post('/admin/feedback/{id}/approve', function ($id) {

    $feedback = Feedback::findOrFail($id);
    $feedback->status = 'approved';
    $feedback->save();

    return redirect()->back()->with('success', 'Feedback approved');

})->middleware(['auth', 'admin'])->name('feedback.approve');


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';