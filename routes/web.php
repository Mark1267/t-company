<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\InvestmentController;

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


Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');

    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/save', 'contactSave')->name('contact.save');

    Route::get('/services', 'services')->name('services');
    Route::get('/teams', 'teams')->name('teams');
    Route::get('/plans', 'plans')->name('plans');

    Route::get('/terms', 'terms')->name('terms');
    Route::get('/affiliate', 'affiliate')->name('affiliate');
    Route::get('/faq', 'faq')->name('faq');
    
    Route::get('/developer/readme', 'developer')->name('developer.readme');
});

Route::controller(BlogController::class)->prefix('news')->name('news.')->group(function(){
    Route::get('/', 'news')->name('all');
    Route::get('/signle/{id}', 'signle')->name('signle');

    Route::get('/{category_id}', 'sortByCategory')->name('by.category');
});

require __DIR__.'/auth.php';

//Artisan
Route::get('/artisan/{command}', function($command){
    if($command == 'migrate'){
        $output = ['--force' => true];
    }else{
        $output = [];
    }
    Artisan::call($command, $output);
    dd(Artisan::output());
});

Route::get('/mail', function(){
    return view('mail.deposit.request');
});

//General

Route::get('/reinvest/{transaction_id}/{type}', [InvestmentController::class, 'restartInvestment'])->name('reinvest')->middleware(['auth']);

Route::get('/conact/{username}', 
    function($username){
        $url = "https://t.me/" . $username;
        return Redirect::to($url);
    }
)->name('conact.telegram');