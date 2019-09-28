<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create a model factory builder for a given class, name, and amount.
        // create( )= Create a collection of models and persist them to the database.


         factory('App\Article')->create();
    }
}
