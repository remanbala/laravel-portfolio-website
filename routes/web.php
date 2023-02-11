<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'editProfile')->name('edit.profile');
        Route::post('/store/profile', 'storeProfile')->name('store.profile');
    
        Route::get('/change/password', 'changePassword')->name('change.password');
        Route::post('/update/password', 'updatePassword')->name('update.password');
    });
});


//Home Controller
Route::controller(HomeController::class)->group(function() {
    Route::get('/','HomePage')->name('home');

});


//Home Slider Controller
Route::controller(HomeSliderController::class)->group(function() {
    Route::get('/home/slide','HomeSlide')->name('home.slide');
    Route::post('/update/slider','UpdateSlider')->name('update.slider');
});

//About Controller
Route::controller(AboutController::class)->group(function() {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');
    Route::get('/about/skill-images', 'SkillImages')->name('skill.images');
    Route::post('/store/skill-images', 'StoreSkillImages')->name('store.skillImages');

    Route::get('/all/skill/images', 'AllSkillImages')->name('all.skill.images');
    Route::get('/edit/skill/images/{id}', 'EditSkillImages')->name('edit.skill.images');
    Route::post('/update/skill/images', 'UpdateSkillImages')->name('update.skill.images');
    Route::get('/delete/skill/images/{id}', 'DeleteSkillImages')->name('delete.skill.images');
});

//Portfolio All Route
Route::controller(PortfolioController::class)->group(function() {
    Route::get('/all/portfolio','AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio','AddPortfolio')->name('add.portfolio');
    Route::get('/edit/portfolio/{id}','EditPortfolio')->name('edit.portfolio');
    Route::post('/store/portfolio','StorePortfolio')->name('store.portfolio');
    Route::post('/update/portfolio','UpdatePortfolio')->name('update.portfolio');

    Route::get('/delete/portfolio/{id}','DeletePortfolio')->name('delete.portfolio');
    Route::get('/portfolio/details/{id}','PortfolioDetails')->name('portfolio.details');
    
    Route::get('/portfolio','HomePortfolio')->name('home.portfolio');

});

//Blog Category All Route
Route::controller(BlogCategoryController::class)->group(function() {
    Route::get('/all/blog/category','AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category','AddBlogCategory')->name('add.blog.category');
    Route::get('/edit/blog/category/{id}','EditBlogCategory')->name('edit.blog.category');
    Route::get('/delete/blog/category/{id}','DeleteBlogCategory')->name('delete.blog.category');

    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');


});


//Blog Controller
Route::controller(BlogController::class)->group(function() {
    Route::get('/all/blog','AllBlog')->name('all.blog');
    Route::get('/add/blog','AddBlog')->name('add.blog');
    Route::post('/store/blog','StoreBlog')->name('store.blog');
    Route::post('/update/blog','UpdateBlog')->name('update.blog');

    Route::get('/edit/blog/{id}','EditBlog')->name('edit.blog');
    Route::get('/delete/blog/{id}','DeleteBlog')->name('delete.blog');

    Route::get('/blog/details/{id}','BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}','CategoryBlog')->name('category.blog');
    Route::get('/blog','HomeBlog')->name('home.blog');
});

//Footer Controller
Route::controller(FooterController::class)->group(function() {
    Route::get('/footer/setup','FooterSetup')->name('footer.setup');
    Route::post('/footer/update','FooterUpdate')->name('footer.update');
});

//Contact Controller
Route::controller(ContactController::class)->group(function() {
    Route::get('/contact','Contact')->name('contact.me');
    Route::post('/store/message','StoreMessage')->name('store.message');
    Route::get('/contact/message','ContactMessage')->name('contact.message');
    Route::get('/delete/message/{id}','DeleteMessage')->name('delete.message');
});