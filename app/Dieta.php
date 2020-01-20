<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dieta extends Model
{
    /**
     * @var string Table name
     */
    protected $table = 'dieta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'objetivo', 'user_id'
    ];

    /**
     * As refeicoes que essa dieta possui
     *
     * @author Victor Marciano
     */
    public function refeicao()
    {
        return $this->hasMany('App\Refeicao');
    }

    /**
     * Obtem todos os dados necessários para o PDF de determinada dieta
     * @param int $id
     * @author Victor Marciano
     */
    public static function getDietaDataById($id)
    {   
        $dieta = DB::table('users')
                ->join('dieta', 'users.id', '=', 'dieta.user_id')
                ->join('refeicao', 'dieta.id', '=', 'refeicao.dieta_id')
                ->join('alimento_refeicao', 'refeicao.id', '=', 'alimento_refeicao.refeicao_id')
                ->join('alimento', 'alimento.id', '=', 'alimento_refeicao.alimento_id')
                ->selectRaw(
                    "
                    users.name, dieta.nome,
                    ROUND(SUM(alimento.proteina)) as proteina_total,
                    ROUND(SUM(alimento.calorias)) as calorias_total,
                    ROUND(SUM(alimento.carbohidrato)) as carbo_total,
                    ROUND(SUM(alimento.gordura)) as gordura_total,
                    CASE dieta.objetivo WHEN 1 THEN 'Perda de peso' WHEN 2 THEN 'Hipertrofia' WHEN 3 THEN 'Manutenção do peso' END as objetivo,                    
                    dieta.id
                    "
                )
                ->where('dieta.id', '=', $id)
                ->groupBy('dieta.id')
                ->first();
        
        return $dieta;
    }
}
