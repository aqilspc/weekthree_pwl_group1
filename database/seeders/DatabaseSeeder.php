<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //action home
        $this->call([
            homeSeed::class,
        ]);

        //action about
        $this->call([
            aboutSeed::class,
        ]);


        // action kategori
    	$this->call([
            categorySeed::class,
        ]);
    	Category::factory(100)->create();

        //action blog
        $this->call([
            blogSeed::class,
        ]);
    	Blog::factory(100)->create();

        //action contact
        $this->call([
            contactSeed::class,
        ]);
    	Contact::factory(100)->create();
    }
}
