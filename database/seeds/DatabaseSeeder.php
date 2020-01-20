<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlimentoSeeder::class);
        factory(\App\User::class, 50)->create();
        factory(\App\Dieta::class, 50)->create();
        factory(\App\Refeicao::class, 150)->create();
        $this->call(AlimentoRefeicaoSeeder::class);
    }
}
