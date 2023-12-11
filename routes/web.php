<?php

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|[-[]]
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/articles',[ArticleController::class,'index'])->name('articles.index');
Route::get('/blog-discusion',[ArticleController::class,'show'])->name('articles.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', function () {
    return view('livewire/articles/comment', ['title' => 'Blog']);
})->name('blog');


// Route::get('/profile', function () {
//     return view('user/bio-profile', ['title' => 'Profile']);
// })->name('profile');

// Route::get('/edit-profile', function () {
//     return view('user/edit-profile', ['title' => 'edit-Profile']);
// })->name('edit-profile');


Route::get('/signup', function () {
    return view('user/signup', ['title' => 'Signup']);
})->name('signup');

Route::get('/homepage',function(){
    return view('index', [
        'title' => 'Homepage',
         'active1' => 'active',
         'active2' => null
        ]);
})->name('homepage');

Route::get('/categories',function(){
    return view('section.category.categories', [
        'title' => 'Categories',
        'active2' => 'active',
        'active1' => null,
        'category' => 'Categories']);
})->name('categories');

Route::get('/categories/animation',function(){
    return view('section.category.AN-category', [
        'title' => 'Categories - Animations',
         'active2' => 'active',
         'active1' => null,
         'category' => 'Animation']);
})->name('categories-animation');

Route::get('/categories/action',function(){
    return view('section.category.AC-category', [
        'title' => 'Categories - Action',
         'active2' => 'active',
         'active1' => null,
         'category' => 'Action']);
})->name('categories-action');

Route::get('/categories/history',function(){
    return view('section.category.HI-category', [
        'title' => 'Categories - History',
        'active2' => 'active',
        'active1' => null,
        'category' => 'History']);
})->name('categories-history');

Route::get('/categories/horror',function(){
    return view('section.category.H-category', [
        'title' => 'Categories - Horror',
         'active2' => 'active'
         ,'active1' => null,
         'category' => 'Horror']);
})->name('categories-horror');

Route::get('/categories/science-fiction',function(){
    return view('section.category.SF-category', [
        'title' => 'Categories - Science Fiction',
         'active2' => 'active',
         'active1' => null,
         'category' => 'Science Fiction']);
})->name('categories-sf');

Route::post('/login', 'UserController@login')->name('login.action');
Route::post('user/login4', [UserController::class, 'login'])->name('user.login');




Route::post('/home', [HomeController::class, 'upload']);
Route::match(['get', 'post'], 'edit-profile', [UserController::class, 'showEditForm'])->middleware('auth')->name('edit-profile');
Route::match(['get', 'post'], 'update-username', [UserController::class, 'updateUsername'])->middleware('auth')->name('update-username');

// POST route for logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// GET route for logout (default behavior)
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth')->name('profile');

Route::get('register', [UserController::class, 'register'])->name('login4');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});