<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Database\Factories\RecipeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        RecipeFactory::new()->count(30)->create();
        
    }
}
