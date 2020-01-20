<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    /**
     * @var string Table name
     */
    protected $table = 'alimento';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'calorias', 'carbohidrato', 'proteina', 'gordura'
    ];
        
}
