<?php

namespace Aminetiyal\LaravelReusableActions\Commands;

use Illuminate\Console\Command;

class LaravelReusableActionsCommand extends Command
{
    public $signature = 'laravel-reusable-actions';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
