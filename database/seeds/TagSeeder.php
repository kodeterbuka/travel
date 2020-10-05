<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = collect(['Bersama Sinertour','Umroh Backpaper','Haji Backpaper']);
        $tag->each(function ($c){
            \App\Tag::create([
                'name' => $c,
                'slug' => Str::slug($c),
            ]);
        });
    }
}
