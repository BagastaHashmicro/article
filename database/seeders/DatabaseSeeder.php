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
        // User::create([
            //     'name' => 'Bagasta',
            //     'email' => 'bagasta@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);
            // User::create([
                //     'name' => 'Alusiau',
                //     'email' => 'alusiau@unbraw.ac.id',
                //     'password' => bcrypt('54321')
                // ]);
                // User::create([
                    //     'name' => 'Martinus',
                    //     'email' => 'martinussinaga@gmail.com',
                    //     'password' => bcrypt('54321')
                    // ]);

        User::factory(3)->create();

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

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero corporis impedit non repellendus recusandae molestias quidem incidunt quam, adipisci ducimus!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, odio a sint tenetur temporibus commodi facere! A, consequuntur reprehenderit? Vero, aperiam. Aut repellendus eveniet saepe assumenda mollitia amet consectetur, adipisci minus veniam quo cumque fuga, aspernatur laborum. Molestias nesciunt libero necessitatibus eaque deserunt corporis atque, enim illo quasi! Exercitationem ullam eveniet eaque distinctio tempore? Vero nobis, dolorem, quo sequi quasi animi veritatis officiis molestias fugiat dicta voluptates ex qui tempora ea ipsum ullam debitis expedita molestiae reiciendis laudantium. Explicabo delectus saepe, laboriosam dignissimos harum vitae nisi optio sint deleniti neque porro, ullam maxime incidunt at quo architecto suscipit deserunt.'

        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero corporis impedit non repellendus recusandae molestias quidem incidunt quam, adipisci ducimus!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, odio a sint tenetur temporibus commodi facere! A, consequuntur reprehenderit? Vero, aperiam. Aut repellendus eveniet saepe assumenda mollitia amet consectetur, adipisci minus veniam quo cumque fuga, aspernatur laborum. Molestias nesciunt libero necessitatibus eaque deserunt corporis atque, enim illo quasi! Exercitationem ullam eveniet eaque distinctio tempore? Vero nobis, dolorem, quo sequi quasi animi veritatis officiis molestias fugiat dicta voluptates ex qui tempora ea ipsum ullam debitis expedita molestiae reiciendis laudantium. Explicabo delectus saepe, laboriosam dignissimos harum vitae nisi optio sint deleniti neque porro, ullam maxime incidunt at quo architecto suscipit deserunt.'
        // ]);
        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero corporis impedit non repellendus recusandae molestias quidem incidunt quam, adipisci ducimus!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, odio a sint tenetur temporibus commodi facere! A, consequuntur reprehenderit? Vero, aperiam. Aut repellendus eveniet saepe assumenda mollitia amet consectetur, adipisci minus veniam quo cumque fuga, aspernatur laborum. Molestias nesciunt libero necessitatibus eaque deserunt corporis atque, enim illo quasi! Exercitationem ullam eveniet eaque distinctio tempore? Vero nobis, dolorem, quo sequi quasi animi veritatis officiis molestias fugiat dicta voluptates ex qui tempora ea ipsum ullam debitis expedita molestiae reiciendis laudantium. Explicabo delectus saepe, laboriosam dignissimos harum vitae nisi optio sint deleniti neque porro, ullam maxime incidunt at quo architecto suscipit deserunt.'
        // ]);
    }
}
