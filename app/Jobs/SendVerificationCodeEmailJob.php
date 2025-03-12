<?php

namespace App\Jobs;

use App\Mail\LoginVerificationCodeMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendVerificationCodeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $details;

    /**
     * Create a new job instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $details = $this->details;

        if (isset($details['email'])) {
            $email = new LoginVerificationCodeMail($details);
            Mail::to($details['email'])
                    // ->from(env('MAIL_USERNAME'), env('APP_NAME'))
                    ->send($email);
        } else {
            // Log an error if the 'email' key is missing
            Log::error('Email key is missing in SendVerificationCodeEmailJob.');
        }
    }
}
