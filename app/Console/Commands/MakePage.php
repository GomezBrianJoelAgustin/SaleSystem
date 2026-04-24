<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:make-page')]
#[Description('Command description')]
class MakePage extends Command
{
    /**
     * Execute the console command.
     */
    protected $asignature = 'make:page {name}';
    public function handle()
    {
        $name = $this->argument('name');

        $path = resource_path("js/Pages/{$name}.jsx");

        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0777, true);
        }

        $fileName = class_basename($name);

        $stub = <<<EOT
    export default function {$fileName}() {
        return <div>{$name} page</div>;
    }
    EOT;

        file_put_contents($path, $stub);

        $this->info("Page {$name} creada!");
    }
}
