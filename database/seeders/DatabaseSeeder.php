<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bagasta Sinaga',
            'username' => 'bagasta25',
            'email' => 'bagasta@gmail.com',
            'password' => bcrypt('bagasta')
                ]);
        User::create([
            'name' => 'Alusiau Sinaga',
            'username' => 'alusiau16',
            'email' => 'alusiau@gmail.com',
            'password' => bcrypt('alusiau')
                ]);
        User::create([
            'name' => 'Martinus',
            'username' => 'martinussinaga',
            'email' => 'martinus@gmail.com',
            'password' => bcrypt('martinus')
                    ]);

        User::factory(2)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(50)->create();

    }
}
