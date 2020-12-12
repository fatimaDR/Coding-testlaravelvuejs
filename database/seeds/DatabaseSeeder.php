<?php

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
        factory(App\Model\Category::class, 5)->create();
        factory(App\Model\Product::class, 20)->create();
    }
}
