<?php

namespace App;

use App\Message\StripePaymentIntent;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MessageHandler implements MessageHandlerInterface
{
    public function __invoke(StripePaymentIntent $intent)
    {
        dump('processing!');
    }
}
