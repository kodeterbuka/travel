<?php

use Illuminate\Support\Str;
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
        $categories =collect(['Haji','Umroh','Backpaper']);
        $categories->each(function ($c){
            \App\Category::create([
                'name' => $c,
                'slug' => Str::slug($c),
            ]);
        });
    }
}
