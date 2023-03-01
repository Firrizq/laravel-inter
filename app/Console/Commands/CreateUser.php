<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:adduser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create default user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->ask("Input Name");
        $email = $this->ask("Input Email");
        $password = $this->secret("Input Password");

        $this->line("User: {$name} <{$email}>");
        if($this->confirm("Do you want to continue")){
            $user = new User();

            $user->name = $name;
            $user->email = $email;
            $user->password = $password;

            $user->save();
            $this->info("User has been created");
        } else {
            $this->error("canceled");
        }

        $this->line("done");

    }
}
