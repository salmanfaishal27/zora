<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'Salman Faishal',
            'email'=>'salmanfaishal@gmail.com',
            'password'=> bcrypt('12345')
        ]);
        User::create([
            'name'=> 'Jason',
            'email'=>'jason@gmail.com',
            'password'=> bcrypt('12345')
        ]);

        Category::create([
            'name'=>'Programming',
            'slug'=>'programming',            
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',            
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit, quod reiciendis doloremque voluptas magni labore illo velit minima porro veniam delectus! Pariatur in odio quis modi corrupti natus ipsam dignissimos veniam exercitationem, nisi alias qui, facere obcaecati quam voluptate culpa temporibus repellendus labore necessitatibus vero! Porro dolore, consequuntur reprehenderit impedit fugiat fugit minima nesciunt excepturi accusamus aliquid maiores voluptatum. Harum sequi iusto natus, recusandae a dolores itaque assumenda minus alias enim qui necessitatibus perspiciatis cupiditate fuga deleniti consequuntur dicta praesentium nemo expedita, sint ea ut.',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit, quod reiciendis doloremque voluptas magni labore illo velit minima porro veniam delectus! Pariatur in odio quis modi corrupti natus ipsam dignissimos veniam exercitationem, nisi alias qui, facere obcaecati quam voluptate culpa temporibus repellendus labore necessitatibus vero! Porro dolore, consequuntur reprehenderit impedit fugiat fugit minima nesciunt excepturi accusamus aliquid maiores voluptatum. Harum sequi iusto natus, recusandae a dolores itaque assumenda minus alias enim qui necessitatibus perspiciatis cupiditate fuga deleniti consequuntur dicta praesentium nemo expedita, sint ea ut.',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit, quod reiciendis doloremque voluptas magni labore illo velit minima porro veniam delectus! Pariatur in odio quis modi corrupti natus ipsam dignissimos veniam exercitationem, nisi alias qui, facere obcaecati quam voluptate culpa temporibus repellendus labore necessitatibus vero! Porro dolore, consequuntur reprehenderit impedit fugiat fugit minima nesciunt excepturi accusamus aliquid maiores voluptatum. Harum sequi iusto natus, recusandae a dolores itaque assumenda minus alias enim qui necessitatibus perspiciatis cupiditate fuga deleniti consequuntur dicta praesentium nemo expedita, sint ea ut.',
            'category_id'=>2,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Empat',
            'slug'=>'judul-empat',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis aliquam autem quos quidem nulla, perferendis similique, sed sequi consequuntur dolorem? Quas suscipit impedit, quod reiciendis doloremque voluptas magni labore illo velit minima porro veniam delectus! Pariatur in odio quis modi corrupti natus ipsam dignissimos veniam exercitationem, nisi alias qui, facere obcaecati quam voluptate culpa temporibus repellendus labore necessitatibus vero! Porro dolore, consequuntur reprehenderit impedit fugiat fugit minima nesciunt excepturi accusamus aliquid maiores voluptatum. Harum sequi iusto natus, recusandae a dolores itaque assumenda minus alias enim qui necessitatibus perspiciatis cupiditate fuga deleniti consequuntur dicta praesentium nemo expedita, sint ea ut.',
            'category_id'=>2,
            'user_id'=>2
        ]);
    }
}
