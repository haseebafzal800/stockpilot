<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\SettingController;




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

//FAQ Heads
Route::get('/admin/faq-heads', [FaqsController::class, 'heads'])->name('faq-heads');
Route::post('/admin/faq-heads/save', [FaqsController::class, 'storeHeads'])->name('save-faq-heads');
Route::get('/admin/faq-heads/delete/{id}', [FaqsController::class, 'destroyHeads'])->name('delete-faq-heads');
Route::get('/admin/faq-heads/edit/{id}', [FaqsController::class, 'editHeads'])->name('edit-faq-heads');

//FAQs
Route::get('/admin/faqs', [FaqsController::class, 'index'])->name('faqs');
Route::post('/admin/faq/save', [FaqsController::class, 'store'])->name('save-faq');
Route::get('/admin/faq/delete/{id}', [FaqsController::class, 'destroy'])->name('delete-faq');
Route::get('/admin/faq/edit/{id}', [FaqsController::class, 'edit'])->name('edit-faq');

// Pages
Route::get('/admin/settings/home', [SettingController::class, 'home'])->name('home-settings');
Route::post('/admin/settings/home/update', [SettingController::class, 'updateHome'])->name('update-home-settings');

Route::get('/admin/settings/about-us', [SettingController::class, 'aboutUs'])->name('aboutus-settings');
Route::post('/admin/settings/about-us/update', [SettingController::class, 'updateAboutUs'])->name('update-aboutus-settings');

Route::get('/admin/settings/services', [SettingController::class, 'services'])->name('services-settings');
Route::post('/admin/settings/services/update', [SettingController::class, 'updateServices'])->name('update-services-settings');

Route::get('/admin/settings/portfolio', [SettingController::class, 'portfolio'])->name('portfolio-settings');
Route::post('/admin/settings/portfolio/update', [SettingController::class, 'updatePortfolio'])->name('update-portfolio-settings');

Route::get('/admin/settings/support', [SettingController::class, 'support'])->name('support-settings');
Route::post('/admin/settings/support/update', [SettingController::class, 'updateSupport'])->name('update-support-settings');

Route::get('/admin/settings/blog', [SettingController::class, 'blog'])->name('blog-settings');
Route::post('/admin/settings/blog/update', [SettingController::class, 'updateBlog'])->name('update-blog-settings');

Route::get('/admin/settings/demo', [SettingController::class, 'demo'])->name('demo-settings');
Route::post('/admin/settings/demo/update', [SettingController::class, 'updateDemo'])->name('update-demo-settings');

Route::get('/admin/settings/faqs', [SettingController::class, 'faqs'])->name('faqs-settings');
Route::post('/admin/settings/faqs/update', [SettingController::class, 'updateFaqs'])->name('update-faqs-settings');

Route::get('/admin/settings/partner', [SettingController::class, 'partner'])->name('partner-settings');
Route::post('/admin/settings/partner/update', [SettingController::class, 'updatePartner'])->name('update-partner-settings');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/admin/dashboard'); // Redirect to the desired page after logout.
})->name('logout');
// Route::get('/home', [PagesController::class, 'index'])->name('index');









Route::fallback(function () {
    return view('errors.404');
});