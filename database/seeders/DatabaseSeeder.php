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

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium blandit tellus eget condimentum. Nunc varius, ex sed dapibus pulvinar, massa tellus congue mi, eget vestibulum massa nulla in diam. Sed ac ultricies purus. Aliquam non ipsum non turpis tempus vulputate eget ac sapien. Etiam ut sapien elit. Mauris tempus, quam eu viverra pharetra, eros mauris ultrices erat, id rutrum ligula quam quis tortor. Cras eget commodo odio. Donec est turpis, malesuada a imperdiet ut, tempor ut nunc. Maecenas in sapien blandit, efficitur orci eget, tincidunt dolor. Mauris consequat non augue in consectetur.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium blandit tellus eget condimentum. Nunc varius, ex sed dapibus pulvinar, massa tellus congue mi, eget vestibulum massa nulla in diam. Sed ac ultricies purus. Aliquam non ipsum non turpis tempus vulputate eget ac sapien. Etiam ut sapien elit. Mauris tempus, quam eu viverra pharetra, eros mauris ultrices erat, id rutrum ligula quam quis tortor. Cras eget commodo odio. Donec est turpis, malesuada a imperdiet ut, tempor ut nunc. Maecenas in sapien blandit, efficitur orci eget, tincidunt dolor. Mauris consequat non augue in consectetur.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium blandit tellus eget condimentum. Nunc varius, ex sed dapibus pulvinar, massa tellus congue mi, eget vestibulum massa nulla in diam. Sed ac ultricies purus. Aliquam non ipsum non turpis tempus vulputate eget ac sapien. Etiam ut sapien elit. Mauris tempus, quam eu viverra pharetra, eros mauris ultrices erat, id rutrum ligula quam quis tortor. Cras eget commodo odio. Donec est turpis, malesuada a imperdiet ut, tempor ut nunc. Maecenas in sapien blandit, efficitur orci eget, tincidunt dolor. Mauris consequat non augue in consectetur.</p>'
        ]);
    }
}
