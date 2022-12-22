<?php

namespace App\Command;

use App\Message\StripePaymentIntent;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Messenger\MessageBusInterface;

class DispatchMessageCommand extends Command
{
    protected static $defaultName = 'app:test';

    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->messageBus->dispatch(new StripePaymentIntent());

        (new SymfonyStyle($input, $output))->success('Done!');

        return Command::SUCCESS;
    }
}
