<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        factory(App\blog::class, 5)->create()->each(function ($u) {
//            $u->blogs()->save(factory(App\User::class)->make());
//        });
        factory(App\blog::class, 5)->create();


    }
}
