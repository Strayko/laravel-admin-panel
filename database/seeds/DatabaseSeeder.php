<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('posts')->truncate();

        factory(App\User::class, 10)->create()->each(function($user) {
            $user->posts()->save(factory(App\Post::class)->make());
        });

        factory(App\Role::class, 3)->create();

//        factory(App\User::class, 10)->create();
//        factory(App\Post::class, 10)->create();

//        $this->call('UsersTableSeeder');
    }
}
