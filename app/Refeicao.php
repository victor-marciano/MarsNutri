<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Refeicao extends Model
{
    /**
     * @var string Table name
     */
    protected $table = 'refeicao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'horario', 'dieta_id'
    ];
    
    /**
     * Retorna os alimentos daquela refeição
     *
     * @author Victor Marciano
     */
    public function alimento()
    {
        return $this->belongsToMany('App\Alimento');
    }

    public static function getRefeicoesByDieta(int $id)
    {
        $refeicoes = DB::table('refeicao')
                    ->join('alimento_refeicao', 'refeicao.id', '=', 'alimento_refeicao.refeicao_id')
                    ->join('alimento', 'alimento.id', '=', 'alimento_refeicao.alimento_id')
                    ->selectRaw(
                        '
                            ROUND(SUM(alimento.carbohidrato)) as carbohidrato_refeicao,
                            ROUND(SUM(alimento.proteina)) as proteina_refeicao,
                            ROUND(SUM(alimento.gordura)) as gordura_refeicao,
                            ROUND(SUM(alimento.calorias)) as calorias_refeicao,
                            horario, nome, dieta_id, refeicao.id
                        '
                    )
                    ->where('dieta_id', '=', $id)
                    ->groupBy('refeicao.id')
                    ->get();
        return $refeicoes;
    }
}
