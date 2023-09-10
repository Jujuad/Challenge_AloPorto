<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'peso',
        'comprimento',
        'altura',
        'placa',
        'modelo',
        'quantidade_eixos',
        'chassi_alongado',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

}