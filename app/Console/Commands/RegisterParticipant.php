<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class RegisterParticipant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:register-participant';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register a new participant with an email and random password';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Prompt for participant email
        $email = $this->ask("Please enter the participant's email address");
        $name = $this->ask("Please enter the participant's name");

        // Validate email (basic check)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('Invalid email address. Please try again.');
            return 1;
        }

        // Generate a random password
        $password = Str::random(12); // 12-character random string

        $this->info("Participant registered successfully!");
        $this->info("Email: $email");
        $this->info("Name: $name");
        $this->info("Generated Password: $password");

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password); // Hash the password
        $user->save();

        $this->info('Credentials saved to the database.');

        return 0;
    }
}
