<?php

namespace MultiSafepayErrorWatch\MultiSafepayErrorWatch\Commands;

use Illuminate\Console\Command;

class MultiSafepayErrorWatchCommand extends Command
{
    public $signature = 'modular-middleware-template';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
