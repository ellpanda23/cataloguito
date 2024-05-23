<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Pulceras',
            'slug' => 'Pulceras'
        ]);

        Category::create([
            'name' => 'Collares',
            'slug' => 'Collares'
        ]);

        Category::create([
            'name' => 'Aretes',
            'slug' => 'Aretes'
        ]);
    }
}
