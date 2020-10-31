<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder //executa todas as seeder do sistema
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class); 
        $this->call(PessoaSeeder::class);
    }
}
