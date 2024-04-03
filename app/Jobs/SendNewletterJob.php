<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\TemplateMail;
use Illuminate\Support\Str;
use App\Mail\NewAdminTicket;
use Illuminate\Bus\Queueable;
use App\Models\Mail as MailModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendNewletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $template;
    public $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MailModel $template, User $user)
    {
        $this->template = $template;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   $myUser = $this->user->toArray();
        foreach($myUser as $key => $value){
            Str::replace("#" . $key . "#", $this->template->message, $value);
        }
        
        Mail::to($this->user->email, $this->user->full_name)->send(new TemplateMail($this->template, $this->user));
    }
}
