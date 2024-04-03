<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CompoundInvestmentController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\InvestmentController;
use App\Http\Controllers\Admin\Pricing\PlanController;
use App\Http\Controllers\Admin\Pricing\TimeController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\Pricing\CategoryController;
use App\Http\Controllers\Admin\Settings\Site\FAQController;
use App\Http\Controllers\Admin\Settings\Site\TeamController;
use App\Http\Controllers\Admin\Transactions\BonusController;
use App\Http\Controllers\Admin\Settings\CalculatorController;
use App\Http\Controllers\Admin\Settings\Site\ReviewController;
use App\Http\Controllers\Admin\Transactions\DepositController;
use App\Http\Controllers\Admin\Transactions\WithdrawalController;
use App\Http\Controllers\Admin\Pricing\Compound\PlanController as CompoundPlanController;
use App\Http\Controllers\Admin\Transactions\Compound\DepositController as CompoundDepositController;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function(){
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'overview')->name('overview');
        Route::get('/alerts', 'alerts')->name('alerts');

        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile/save', 'profileSave')->name('profile.save');

    });

    Route::name('transaction.')->prefix('transaction')->group(function(){
        Route::controller(DepositController::class)->prefix('deposit')->name('deposit.')->group(function(){
            Route::get('/', 'deposit')->name('new');
            Route::get('/{plan_id}', 'depositPlan')->name('plan');
            Route::get('/details/{transction_id}', 'details')->name('details');

            Route::post('/save', 'depositSave')->name('new.save');
            Route::get('/{transaction_id}/update', 'update')->name('update');
            Route::post('/update/save', 'updateSave')->name('update.save');

            Route::get('/deposits/{type}', 'deposits')->name('type');
            Route::get('/{transaction_id}/delete', 'delete')->name('delete');
        });

        Route::controller(CompoundDepositController::class)->prefix('compound')->name('compound.')->group(function(){
            Route::get('/', 'deposit')->name('new');
            Route::get('/{plan_id}', 'depositPlan')->name('plan');
            Route::get('/details/{transction_id}', 'details')->name('details');

            Route::post('/save', 'depositSave')->name('new.save');
            Route::get('/{transaction_id}/update', 'update')->name('update');
            Route::post('/update/save', 'updateSave')->name('update.save');

            Route::get('/deposits/extension/{extension_id}', 'depositsExtension')->name('type.extension');
            Route::get('/deposits/{type}', 'deposits')->name('type');
            Route::get('/{transaction_id}/delete', 'delete')->name('delete');
        });
        
        Route::controller(WithdrawalController::class)->prefix('withdraw')->name('withdraw.')->group(function(){
            Route::get('/', 'withdraw')->name('new');
            Route::get('/{plan_id}', 'withdrawPlan')->name('plan');
            Route::post('/save', 'withdrawSave')->name('new.save');
            Route::get('/withdraws/{type}', 'withdraws')->name('type');
            
            Route::get('/{transaction_id}/update', 'update')->name('update');
            Route::post('/update/save', 'updateSave')->name('update.save');

            Route::get('/accept/{transaction_id}', 'accept')->name('accept');
            
            Route::get('/{transaction_id}/delete', 'delete')->name('delete');
        });

        Route::controller(BonusController::class)->prefix('bonus')->name('bonus.')->group(function(){
            Route::get('/add', 'add')->name('add');
            Route::post('/add/save', 'addSave')->name('add.save');
        });
    });

    Route::controller(InvestmentController::class)->prefix('investment')->name('investment.')->group(function(){
        Route::get('/start/{transaction_id}', 'start')->name('start');
        Route::get('/reverse/{transaction_id}', 'reverse')->name('reverse');
        
        Route::get('/pause/{transaction_id}', 'pauseToggle')->name('pause');
    });
    
    Route::controller(CompoundInvestmentController::class)->prefix('compound/investment')->name('compound.investment.')->group(function(){
        Route::get('/start/{transaction_id}', 'start')->name('start');
        Route::get('/reverse/{transaction_id}', 'reverse')->name('reverse');

        Route::get('/rollover/{transaction_id}', 'startExtension')->name('rollover');
        
        Route::get('/pause/{transaction_id}', 'pauseToggle')->name('pause');
    });
    
    Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function(){
        Route::get('/', 'contacts')->name('all');

        Route::post('/new/save', 'newSave')->name('new.save');
        Route::post('/new/nouser/save', 'newNoUserSave')->name('new.nouser.save');

        Route::get('/reply/{ticket_ref}', 'reply')->name('reply');
        Route::post('/reply/save', 'replySave')->name('reply.save');

        Route::get('/{ticket_ref}/delete', 'delete')->name('delete');
    });
    Route::prefix('pricing')->name('pricing.')->group(function(){

        Route::prefix('plan')->name('plan.')->group(function(){
            Route::controller(PlanController::class)->group(function(){
                Route::get('/all/{catID}', 'all')->name('all');

                Route::get('/add', 'add')->name('add');
                Route::get('/add/{catID}', 'addCategory')->name('add.cat');
                Route::post('/add/save', 'addSave')->name('add.save');
                
                Route::get('/edit/{plan_id}', 'edit')->name('edit'); 
                Route::post('/edit/save', 'editSave')->name('edit.save'); 

                Route::get('/{plan_id}/delete', 'delete')->name('delete');
            });

            Route::prefix('compound')->name('compound.')->group(function(){
                Route::controller(CompoundPlanController::class)->group(function(){
                    Route::get('/all/{catID}', 'all')->name('all');

                    Route::get('/add', 'add')->name('add');
                    Route::get('/add/{catID}', 'addCategory')->name('add.cat');
                    Route::post('/add/save', 'addSave')->name('add.save');
                    
                    Route::get('/edit/{plan_id}', 'edit')->name('edit'); 
                    Route::post('/edit/save', 'editSave')->name('edit.save'); 

                    Route::get('/{plan_id}/delete', 'delete')->name('delete');
                });
            });
        });

        Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function(){
            Route::get('/', 'all')->name('all');

            Route::get('/add', 'add')->name('add');
            Route::post('/add/save', 'addSave')->name('add.save');
                
            Route::get('/edit/{category_id}', 'edit')->name('edit'); 
            Route::post('/edit/{id}/save', 'editSave')->name('edit.save'); 

            Route::get('/{category_id}/delete', 'delete')->name('delete');
        });

        Route::controller(TimeController::class)->prefix('time')->name('time.')->group(function(){
            Route::get('/all', 'all')->name('all');

            Route::get('/add', 'add')->name('add');
            Route::post('/add/save', 'addSave')->name('add.save');

            Route::get('/{id}/update', 'update')->name('update');
            Route::post('/{id}/update/save', 'updateSave')->name('update.save');

            Route::get('/{id}/delete', 'delete')->name('delete');
        });
    });

    Route::controller(CurrencyController::class)->prefix('currency')->name('currency.')->group(function(){
        Route::get('/add', 'add')->name('add');
        Route::post('/add/save', 'addSave')->name('add.save');
        
        Route::get('/edit/{currency_id}', 'edit')->name('edit'); 
        Route::post('/edit/save', 'editSave')->name('edit.save');
        
        Route::get('/{currency_id}/delete', 'delete')->name('delete');
    });
    
    Route::controller(UsersController::class)->prefix('users')->name('users.')->group(function(){
        Route::get('/add', 'add')->name('add');
        Route::post('/add/save', 'addSave')->name('add.save');

        Route::get('/{type}/all', 'index')->name('all');

        Route::get('/edit/{users_id}', 'edit')->name('edit');
        Route::post('/edit/save', 'editSave')->name('edit.save');

        Route::get('/verify/{user_id}', 'verifyUser')->name('verify');

        Route::get('/{users_id}/delete', 'delete')->name('delete');

        Route::get('/{user_id}', 'view')->name('view');
    });

    Route::controller(EmailTemplateController::class)->prefix('mail')->name('mail.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/view/{template_id}', 'view')->name('view');

        Route::get('/private/{template_id}', 'private')->name('private');
        Route::post('/private/send', 'privateSend')->name('private.send');
        Route::get('/public/{template_id}/send', 'publicSend')->name('public.send');

        Route::get('/add', 'add')->name('add');
        Route::post('/add/save', 'addSave')->name('add.save');
        Route::get('/edit/{template_id}', 'edit')->name('edit');
        Route::post('/edit/save', 'editSave')->name('edit.save');

        Route::get('/delete/{template_id}', 'delete')->name('delete');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::name('categories.')->prefix('categories')->group(function(){
            Route::get('/', 'categoryAll')->name('all');

            Route::get('/add', 'categoryAdd')->name('add');
            Route::post('/add/save', 'categoryAddSave')->name('add.save');

            Route::get('/{id}/edit', 'categoryEdit')->name('edit');
            Route::post('/edit/save', 'categoryEditSave')->name('edit.save');

            Route::get('/{id}/delete', 'categoryDelete')->name('delete');
        });

        Route::name('posts.')->prefix('posts')->group(function(){
            Route::get('/', 'adminPostAll')->name('all');

            Route::get('/add', 'adminPostAdd')->name('add');
            Route::post('/add/save', 'adminPostAddSave')->name('add.save');

            Route::get('/{id}/edit', 'adminPostEdit')->name('edit');
            Route::post('/edit/save', 'adminPostEditSave')->name('edit.save');

            Route::get('/{id}/delete', 'adminPostDelete')->name('delete');
        });
    });

    //SIte settings
    Route::prefix('settings')->name('settings.')->group(function(){
        //Calulator
        Route::controller(CalculatorController::class)->prefix('calculator')->name('calculator.')->group(function(){
            Route::get('/', 'index')->name('index');
        });

        Route::prefix('site')->name('site.')->group(function(){
            Route::controller(TeamController::class)->prefix('teams')->name('teams.')->group(function(){
                Route::get('/all', 'all')->name('all');

                Route::get('/add', 'add')->name('add');
                Route::post('/add/save', 'addSave')->name('add.save');
        
                Route::get('/update/{id}', 'update')->name('update');
                Route::post('/update/{id}/save', 'updateSave')->name('update.save');
        
                Route::get('/delete/{id}', 'delete')->name('delete');
            });
            
            Route::controller(FAQController::class)->prefix('faq')->name('faq.')->group(function(){
                Route::get('/all', 'all')->name('all');

                Route::get('/add', 'add')->name('add');
                Route::post('/add/save', 'addSave')->name('add.save');
        
                Route::get('/update/{id}', 'update')->name('update');
                Route::post('/update/{id}/save', 'updateSave')->name('update.save');
        
                Route::get('/delete/{id}', 'delete')->name('delete');
            });

            Route::controller(ReviewController::class)->prefix('reviews')->name('reviews.')->group(function(){
                Route::get('/all', 'all')->name('all');

                Route::get('/add', 'add')->name('add');
                Route::post('/add/save', 'addSave')->name('add.save');
        
                Route::get('/update/{id}', 'update')->name('update');
                Route::post('/update/{id}/save', 'updateSave')->name('update.save');
        
                Route::get('/delete/{id}', 'delete')->name('delete');
            });
        });
    });
    
});