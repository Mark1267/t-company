<?php

namespace App\Providers;

use App\Events\Admin\Transactions\BonusEvent;
use App\Events\InvestmentStartedEvent;
use App\Events\Ticket\ReplyEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Events\Transaction\DepositRequest;
use App\Events\Transaction\WithdrawalRequest;
use App\Events\Transaction\WithdrawalSuccess;
use App\Listeners\Admin\Transactions\BonusListener;
use App\Listeners\InvestmentStartedListener;
use App\Listeners\Ticket\ReplyListener;
use App\Listeners\Transaction\WithdrwalRequestListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Listeners\Transaction\DepositRequest as DepositRequestListener;
use App\Listeners\Transaction\WithdrawalSuccessListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        DepositRequest::class => [
            DepositRequestListener::class
        ],
        WithdrawalRequest::class => [
            WithdrwalRequestListener::class
        ],
        InvestmentStartedEvent::class => [
            InvestmentStartedListener::class
        ],
        WithdrawalSuccess::class => [
            WithdrawalSuccessListener::class
        ],
        ReplyEvent::class => [
            ReplyListener::class
        ],
        BonusEvent::class => [
            BonusListener::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
