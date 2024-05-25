<?php

namespace App\Listeners;
use App\Events\PersonneCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;


class ListenerPersonne
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
    }
}

class SendPersonCreatedNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  PersonneCreated  $event
     * @return void
     */
    public function handle(PersonneCreated $event)
    {
        // Par exemple, envoyer un email
        $person = $event->personne;

        // Mail::send('emails.person_created', ['person' => $person], function ($message) use ($person) {
        //     $message->to($person->email);
        //     $message->subject('Personne Created');
        // });
        echo View::make('events.person_created', ['person' => $person])->render();
    }
    }
}
