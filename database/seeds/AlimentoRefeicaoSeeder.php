<?php

use Illuminate\Database\Seeder;

class AlimentoRefeicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alimentos = \App\Alimento::all();
        
        App\Refeicao::all()->each(function ($refeicao) use ($alimentos) {
            $refeicao->alimento()->attach(
                $alimentos->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
