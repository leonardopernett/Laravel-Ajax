<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(User::class, 12)->create();

        User::create([ 

            'name'     => 'leonardo',
            'email'    => 'leo@gmail.com',
            'password' => bcrypt(123456)
        ]);
    }
}
