<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category;
        $category->nom = 'voiture de luxe';
        $category->is_online = 1;
        $category->save();

        $category = new Category;
        $category->nom = 'voiture sportive';
        $category->is_online = 1;
        $category->save();

        $category = new Category;
        $category->nom = 'voiture classique';
        $category->is_online = 1;
        $category->save();

        $category = new Category;
        $category->nom = 'voiture plaisir';
        $category->is_online = 1;
        $category->save();
    }
}
