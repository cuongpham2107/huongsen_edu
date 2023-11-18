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

Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/search', [App\Http\Controllers\HomeController::class,'search']);

Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('contact', App\Http\Controllers\ContactController::class);
Route::resource('about-us', App\Http\Controllers\AboutUsController::class);
Route::resource('admission-articles', App\Http\Controllers\AdmissionArticlesController::class);
Route::resource('unit-information', App\Http\Controllers\UnitInformationController::class);
Route::resource('cooperation-links', App\Http\Controllers\CooperationController::class);
Route::resource('document-knowledge', App\Http\Controllers\DocumentKnowledgeController::class);
Route::resource('abroad-studies', App\Http\Controllers\AbroadStudyController::class);

Route::get('/category-admission-articles/{slug}',[App\Http\Controllers\AdmissionArticlesController::class,'category']);
Route::get('/category-post/{slug}',[App\Http\Controllers\PostController::class,'category']);
Route::get('/category-unit/{slug}',[App\Http\Controllers\UnitInformationController::class,'category']);
Route::get('/category-cooperation/{slug}',[App\Http\Controllers\CooperationController::class,'category']);
Route::get('/category-documents/{slug}',[App\Http\Controllers\DocumentKnowledgeController::class,'category']);
Route::get('/category-studies/{slug}',[App\Http\Controllers\AbroadStudyController::class,'category']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
