<?php


// File: app/Console/Commands/StorageLinkCommand.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Exception;

class StorageLinkCommand extends Command
{
    protected $signature = 'storage:link';
    protected $description = 'Create the symbolic links configured for the application';

    public function handle(Filesystem $files)
    {
        $target = storage_path('app/public');
        $link = public_path('storage');

        if ($files->exists($link)) {
            $this->error('The "public/storage" directory already exists.');
            return;
        }

        try {
            $files->link($target, $link);
            $this->info('The [public/storage] directory has been linked.');
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
