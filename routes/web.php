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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin page login
Route::get('/admin/login', [App\Http\Controllers\AdminCmsController::class, 'adminLogin'])->name('adminlogin.show');
//admin page register
Route::get('/admin/register', [App\Http\Controllers\AdminCmsController::class, 'adminRegister'])->name('adminregister.show');


Route::post('/admin/register/create', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('adminregister.create');


Route::post('/admin/register', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('adminlogin.create');

Route::post('admin/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('admin.logout');


//middlewere function
Route::group(['middleware' => 'auth'],function(){


//backend Admin Dashboard Panel Showing
Route::get('/admin/dashboard', [App\Http\Controllers\AdminCmsController::class, 'getDashboard'])->name('admin.dashboard');

//service section
Route::get('/service', [App\Http\Controllers\SectionController::class, 'index'])->name('service');


Route::post('/service-create', [App\Http\Controllers\SectionController::class, 'serviceStore'])->name('service.store');


Route::get('/service-show', [App\Http\Controllers\SectionController::class, 'serviceShow'])->name('service.show');

Route::get('/service-delete/{id}', [App\Http\Controllers\SectionController::class, 'serviceDelete'])->name('service.delete');

Route::get('/service-edit/{id}', [App\Http\Controllers\SectionController::class, 'serviceEdit'])->name('service.edit');

Route::post('/service-update', [App\Http\Controllers\SectionController::class, 'serviceUpdate'])->name('service.update');

//work section

Route::get('/work', [App\Http\Controllers\WorkController::class, 'workSectionShow'])->name('work');
Route::post('/work-category-add', [App\Http\Controllers\WorkController::class, 'categoryAdd'])->name('work.category.add');

Route::get('/work-category-edit/{id}', [App\Http\Controllers\WorkController::class, 'categoryEdit'])->name('work.category.edit');

Route::get('/work-category-delete/{id}', [App\Http\Controllers\WorkController::class, 'categoryDelete'])->name('work.category.delete');


Route::post('/work-category-update', [App\Http\Controllers\WorkController::class, 'categoryUpdate'])->name('work.category.update');

Route::post('/work-add', [App\Http\Controllers\WorkController::class, 'workAdd'])->name('work.add');


Route::get('/category-show', [App\Http\Controllers\WorkController::class, 'categoryShow'])->name('category.show');

Route::get('/work-show', [App\Http\Controllers\WorkController::class, 'workShow'])->name('work.show');

Route::get('/work-edit/{id}', [App\Http\Controllers\WorkController::class, 'workEdit'])->name('work.edit');

Route::get('/work-delete/{id}', [App\Http\Controllers\WorkController::class, 'workDelete'])->name('work.delete');

Route::post('/work-update', [App\Http\Controllers\WorkController::class, 'workUpdate'])->name('work.update');

//about Section

Route::get('/aboutme', [App\Http\Controllers\AboutMeController::class, 'aboutMe'])->name('aboutme');
Route::get('/hide-card', [App\Http\Controllers\AboutMeController::class, 'hideCard'])->name('hide.card');


Route::post('/aboutme-create', [App\Http\Controllers\AboutMeController::class, 'aboutMeCreate'])->name('aboutme.create');


Route::get('/aboutme-show', [App\Http\Controllers\AboutMeController::class, 'aboutShow'])->name('show.about');


Route::get('/aboutme-edit/{id}', [App\Http\Controllers\AboutMeController::class, 'aboutEdit'])->name('edit.about');


Route::post('/aboutme-update', [App\Http\Controllers\AboutMeController::class, 'aboutUpdate'])->name('about.update');



//skill
Route::get('/skill', [App\Http\Controllers\AboutMeController::class, 'skillShow'])->name('skill');

Route::post('/skill-create', [App\Http\Controllers\AboutMeController::class, 'skillCreate'])->name('skill.store');

Route::get('/skill-show', [App\Http\Controllers\AboutMeController::class, 'skillShowAll'])->name('skill.show');

//header
Route::get('/home-part', [App\Http\Controllers\HeaderController::class, 'headerPart'])->name('homeheader');

Route::post('/header-create', [App\Http\Controllers\HeaderController::class, 'headerCreate'])->name('header.create');

Route::get('/hide-card-header', [App\Http\Controllers\HeaderController::class, 'hideCardHeader'])->name('hide.card.header');

Route::get('/header-edit/{id}', [App\Http\Controllers\HeaderController::class, 'headerEdit'])->name('edit.header');

Route::post('/header-update', [App\Http\Controllers\HeaderController::class, 'headerUpdate'])->name('header.update');


//Socail
Route::get('/social', [App\Http\Controllers\SocialController::class, 'index'])->name('social');

Route::post('/social-create', [App\Http\Controllers\SocialController::class, 'socialCreate'])->name('social.create');

Route::get('/hide-card-social', [App\Http\Controllers\SocialController::class, 'hideCardSocial'])->name('hide.card.social');

Route::get('/social-edit/{id}', [App\Http\Controllers\SocialController::class, 'socialEdit'])->name('edit.social');

Route::post('/social-update', [App\Http\Controllers\SocialController::class, 'socialUpdate'])->name('social.update');

//blog
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::post('/blog-create', [App\Http\Controllers\BlogController::class, 'blogCreate'])->name('blog.create');
Route::get('/blog-show', [App\Http\Controllers\BlogController::class, 'blogShow'])->name('blog.show');

Route::get('/blog-delete/{id}', [App\Http\Controllers\BlogController::class, 'blogDelete'])->name('blog.delete');

Route::get('/blog-edit/{id}', [App\Http\Controllers\BlogController::class, 'blogEdit'])->name('blog.edit');

Route::post('/blog-update', [App\Http\Controllers\BlogController::class, 'blogUpdate'])->name('blog.update');

//review
Route::get('/review', [App\Http\Controllers\ReviewController::class, 'index'])->name('review');
Route::post('/review-create', [App\Http\Controllers\ReviewController::class, 'reviewCreate'])->name('review.create');
Route::get('/review-show', [App\Http\Controllers\ReviewController::class, 'reviewShow'])->name('review.show');

Route::get('/review-delete/{id}', [App\Http\Controllers\ReviewController::class, 'reviewDelete'])->name('review.delete');


Route::get('/review-edit/{id}', [App\Http\Controllers\ReviewController::class, 'reviewEdit'])->name('review.edit');

Route::post('/review-update', [App\Http\Controllers\ReviewController::class, 'reviewUpdate'])->name('review.update');


//slider

Route::get('/slider', [App\Http\Controllers\SliderController::class, 'index'])->name('slider');

Route::post('/slider-create', [App\Http\Controllers\SliderController::class, 'sliderCreate'])->name('slider.create');

Route::get('/slider-show', [App\Http\Controllers\SliderController::class, 'sliderShow'])->name('review.show');

Route::get('/slider-delete/{id}', [App\Http\Controllers\SliderController::class, 'sliderDelete'])->name('slider.delete');

Route::get('/slider-edit/{id}', [App\Http\Controllers\SliderController::class, 'sliderEdit'])->name('slider.edit');

Route::post('/slider-update', [App\Http\Controllers\SliderController::class, 'sliderUpdate'])->name('slider.update');


//education
Route::get('/education', [App\Http\Controllers\EducationController::class, 'index'])->name('education');

Route::post('/education-create', [App\Http\Controllers\EducationController::class, 'educationCreate'])->name('education.create');

Route::get('/education-show', [App\Http\Controllers\EducationController::class, 'educationShow'])->name('education.show');

Route::get('/education-delete/{id}', [App\Http\Controllers\EducationController::class, 'educationDelete'])->name('education.delete');

//experience

Route::get('/experience', [App\Http\Controllers\ExperienceController::class, 'index'])->name('experience');

Route::post('/experience-create', [App\Http\Controllers\ExperienceController::class, 'experienceCreate'])->name('experience.create');

Route::get('/experience-show', [App\Http\Controllers\ExperienceController::class, 'experienceShow'])->name('review.show');

Route::get('/exp-delete/{id}', [App\Http\Controllers\ExperienceController::class, 'expDelete'])->name('experience.show');

});


//FrontEnd Fabos Page Showing
Route::get('/fabos', [App\Http\Controllers\FrontFabosController::class, 'index'])->name('fabos');

Route::post('/contact-msg', [App\Http\Controllers\NillFrontController::class, 'senderMsg'])->name('send.contact');

//FrontEnd Nill Page Showing
Route::get('/', [App\Http\Controllers\NillFrontController::class, 'index'])->name('nill');

