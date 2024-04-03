<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\User\ContactController;
use App\Services\Investment\Compound\DataService;
use App\Http\Controllers\Admin\InvestmentController;
use App\Http\Controllers\User\Transactions\DepositController;
use App\Http\Controllers\User\Transactions\CompoundController;
use App\Http\Controllers\User\Transactions\WithdrawalController;
Route::prefix('user')->name('user.')->middleware(['auth', 'verified'])->group(function(){

    Route::get('test', function(){
        return dd(new DataService(1));
    });

    Route::controller(UsersController::class)->group(function () {
        Route::get('/dashboard', 'overview')->name('overview');
        Route::get('/alerts', 'alerts')->name('alerts');

        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile/save', 'profileSave')->name('profile.save');
                
        Route::get('/plans', 'plans')->name('plans');

        // Route::get('/plans/compound/{type}', 'plans')->name('plans');

        Route::get('/withdrawals/{type}', 'withdrawals')->name('withdrawals');
        Route::get('/withdraw', 'withdraw')->name('withdraw');
        Route::get('/withdraw/{transaction_id}', 'withdrawTransaction')->name('withdraw.transaction');

        Route::get('/referrals', 'referrals')->name('referrals');
    });
            
    Route::name('transaction.')->prefix('transaction')->group(function(){
        Route::controller(DepositController::class)->prefix('deposit')->name('deposit.')->group(function(){
            Route::get('/', 'deposit')->name('new');
            Route::get('/deposits/{type}', 'deposits')->name('type');
            Route::get('/details/{transction_id}', 'details')->name('details');
            Route::post('/save', 'depositSave')->name('new.save');
            Route::get('/{plan_id}/{type}', 'depositPlan')->name('plan');
            Route::prefix('invest')->name('invest.')->group(function(){
                Route::get('/bonus', 'bonus')->name('bonus');
                Route::get('/balance', 'balance')->name('balance');
            });
            Route::get('/calculate/{plan_id}', 'calculate')->name('calculate');
        });

        Route::controller(CompoundController::class)->prefix('exclusive/deposit')->name('compound.deposit.')->group(function(){
            Route::get('/', 'deposit')->name('new');
            Route::get('/deposits/{type}', 'deposits')->name('type');
            Route::post('/save', 'depositSave')->name('new.save');
            Route::prefix('invest')->name('invest.')->group(function(){
                Route::get('/bonus', 'bonus')->name('bonus');
                Route::get('/balance', 'balance')->name('balance');
            });
            Route::get('/calculate/{plan_id}', 'calculate')->name('calculate');
            Route::get('/details/{transction_id}', 'details')->name('details');
            Route::get('/{plan_id}', 'depositPlan')->name('plan');
            Route::get('/extend/{id}', 'extend')->name('extend');
        });
                
        Route::controller(WithdrawalController::class)->prefix('withdraw')->name('withdraw.')->group(function(){
            Route::get('/', 'withdraw')->name('new');
            Route::get('/{plan_id}', 'withdrawPlan')->name('plan');
            Route::post('/save', 'withdrawSave')->name('new.save');
            Route::get('/withdraws/{type}', 'withdraws')->name('type');
        });
    });
            
    Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function(){
        Route::get('/', 'contact')->name('new');
        Route::post('/save', 'contactSave')->name('save');

        Route::get('/{ticket_id}/delete', 'delete')->name('delete');
    });
});