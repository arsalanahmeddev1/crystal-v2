<?php

namespace App\Listeners;

use App\Notifications\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ClientWelcomeListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        //
        $user = $event->user;
        $user->notify(new WelcomeEmail());

        // Mail::to($user->email)->send(new WelcomeMail($user));
    }
}
