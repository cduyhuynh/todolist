<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create(['name' => 'Work']);
        $category = Category::create(['name' => 'Home']);
        $category = Category::create(['name' => 'Places']);
        $category = Category::create(['name' => 'Plan']);
    }
}
