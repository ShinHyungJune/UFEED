<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    public function run(): void
    {
        Login::create([
            'warning_text' => "Legal and privacy information.
Unauthorized users prohibited."
        ]);
    }
}
