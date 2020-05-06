<?php

use Illuminate\Database\Seeder;
use App\Turma;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //a
        // $this->call(UserSeeder::class);
        factory(Turma::class, 10)->create();
    }
}
