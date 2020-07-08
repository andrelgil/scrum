<?php

use App\Models\UserContact;
use Illuminate\Database\Seeder;

class UserContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserContact::class, 4)->create()->each(function ($user){
            factory(UserContact::class)->create(['user_id'=>$user->idate]);
        });
    }
}
