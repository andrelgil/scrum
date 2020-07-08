<?php

use App\Models\User;
use App\Models\UserContact;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 20)
            ->create()
            ->each(function ($user) {
                factory(UserContact::class, 1)
                    ->create([
                        'user_id' => $user->id
                    ]);
            });
    }
}
