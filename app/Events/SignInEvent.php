<?php

namespace App\Events;

use Illuminate\Support\Facades\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use App\Listeners\NewMicrosoft365SignInListener;
use Illuminate\Broadcasting\InteractsWithSockets;

class SignInEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(public array $token)
    {

    }
}
