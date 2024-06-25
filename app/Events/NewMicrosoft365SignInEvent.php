<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Listeners\NewMicrosoft365SignInListener;
//use Dcblogdev\MsGraph\Events\NewMicrosoft365SignInEvent;

class NewMicrosoft365SignInEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(public array $token)
    {

    }
}
