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
        // $this->call(UserSeeder::class);
        factory(App\Models\Category::class, 8)->create();
        factory(App\Models\Product::class, 140)->create();
        factory(App\Models\Ad::class, 21)->create();
    }
}
