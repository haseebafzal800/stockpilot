<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\TestimonialsController;



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

// Route::get('/', function () {
//     return View::make('pages.home');
// });
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/blogs', [PagesController::class, 'blogs'])->name('blogs');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contactUs');
Route::get('/demo', [PagesController::class, 'demo'])->name('demo');
Route::get('/faqs', [PagesController::class, 'faqs'])->name('faqs');
Route::get('/pilot', [PagesController::class, 'pilot'])->name('pilot');
Route::get('/partners', [PagesController::class, 'partners'])->name('partners');
Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/subscribers', [PagesController::class, 'subscribers'])->name('subscribers');
Route::get('/strategy', [PagesController::class, 'strategy'])->name('strategy');
Route::get('/case-studies', [PagesController::class, 'caseStudies'])->name('caseStudies');



// Auth::routes();
Route::get('/admin/login', [LoginController::class, 'showloginform'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('login');
Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');

//blogs
Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('create-blog');
Route::post('/admin/blogs/save', [BlogController::class, 'store'])->name('save-blog');
Route::get('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('delete-blog');
Route::get('/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('edit-blog');
Route::post('/admin/blog/update', [BlogController::class, 'update'])->name('update-blog');


//blogs
Route::get('/admin/news', [NewsController::class, 'index'])->name('news');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('create-news');
Route::post('/admin/news/save', [NewsController::class, 'store'])->name('save-news');
Route::get('/admin/news/delete/{id}', [NewsController::class, 'destroy'])->name('delete-news');
Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('edit-news');
Route::post('/admin/news/update', [NewsController::class, 'update'])->name('update-news');


//Team
Route::get('/admin/team', [TeamController::class, 'index'])->name('team');
Route::get('/admin/team/create', [TeamController::class, 'create'])->name('create-team');
Route::post('/admin/team/save', [TeamController::class, 'store'])->name('save-team');
Route::get('/admin/team/delete/{id}', [TeamController::class, 'destroy'])->name('delete-team');
Route::get('/admin/team/edit/{id}', [TeamController::class, 'edit'])->name('edit-team');
Route::post('/admin/team/update', [TeamController::class, 'update'])->name('update-team');

//Testimonials
Route::get('/admin/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/admin/testimonial/create', [TestimonialsController::class, 'create'])->name('create-testimonial');
Route::post('/admin/testimonial/save', [TestimonialsController::class, 'store'])->name('save-testimonial');
Route::get('/admin/testimonial/delete/{id}', [TestimonialsController::class, 'destroy'])->name('delete-testimonial');
Route::get('/admin/testimonial/edit/{id}', [TestimonialsController::class, 'edit'])->name('edit-testimonial');
Route::post('/admin/testimonial/update', [TestimonialsController::class, 'update'])->name('update-testimonial');

//Tags
Route::get('/admin/tags', [TagsController::class, 'index'])->name('tags');
// Route::get('/admin/tag/create', [TagsController::class, 'create'])->name('create-tag');
Route::post('/admin/tag/save', [TagsController::class, 'store'])->name('save-tag');
Route::get('/admin/tag/delete/{id}', [TagsController::class, 'destroy'])->name('delete-tag');
Route::get('/admin/tag/edit/{id}', [TagsController::class, 'edit'])->name('edit-tag');
// Route::post('/admin/tag/update', [TagsController::class, 'update'])->name('update-tag');



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/admin/dashboard'); // Redirect to the desired page after logout.
})->name('logout');
// Route::get('/home', [PagesController::class, 'index'])->name('index');









Route::fallback(function () {
    return view('errors.404');
});