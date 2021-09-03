<?php

namespace Frc\SafeToSend\Commands;

use Illuminate\Console\Command;

class SafeToSendCommand extends Command
{
    public $signature = 'safe-to-send';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
