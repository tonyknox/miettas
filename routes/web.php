<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\DirectoriesController@splash_page')->name('directory.splash');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resources([
    'contents' => App\Http\Controllers\ContentsController::class,
    'directories' => App\Http\Controllers\DirectoriesController::class,
    'recipes' => App\Http\Controllers\RecipesController::class,
    'mymethods' => App\Http\Controllers\MymethodsController::class,
    'photos' => App\Http\Controllers\PhotosController::class,
    'quantities' => App\Http\Controllers\QuantitiesController::class,
    'ingredients' => App\Http\Controllers\IngredientsController::class,
]);

Route::get('SearchContents', 'App\Http\Controllers\SearchController@searchcontents')->name('SearchContents');
Route::get('SearchIngredients', 'App\Http\Controllers\SearchController@searchingredients')->name('SearchIngredients');
Route::get('SearchMethods', 'App\Http\Controllers\SearchController@searchmethods')->name('SearchMethods');
Route::get('SearcPhotos', 'App\Http\Controllers\SearchController@searchphotos')->name('SearchPhotos');
Route::get('SearchRecipes', 'App\Http\Controllers\SearchController@searchrecipes')->name('SearchRecipes');

require __DIR__.'/auth.php';