<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        factory(App\User::class, 5)->create();
        factory(App\User::class, 5)->create()->each(function ($u) {
            $u->blogs()->save(factory(App\blog::class)->make());
        });
    }
}
