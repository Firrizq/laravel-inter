<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Laravelcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:basic
    {argument : ini adalah deskripsi argument}
    {--o|opsi= : ini adalah deskripsi opsi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'laravel basic command
';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info("Informasi Yang Muncul Dalam Terminal");
        $this->error("something went wrong");
        $this->line("Display this on the screen");

        $this->line(print_r($this->options()). '' . print_r($this->arguments()));
    }
}
