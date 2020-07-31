<?php

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('App/Todo')->create();
        factory(App\Todo::class,5)->create();
        factory(App\User::class,2)->create();
    }
}
