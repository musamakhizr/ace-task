<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserLoggedInListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserLoggedIn $event)
    {
        $user = $event->user;

        // check if the user is already logged in from another device
        $existingSession = $user->sessions()->where('id', '!=', session()->getId())->first();

        if ($existingSession) {
            // log out the user from the previous device
            $existingSession->invalidate();
        }
    }
}
