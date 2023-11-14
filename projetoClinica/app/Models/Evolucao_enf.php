<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolucao_enf extends Model
{
    use HasFactory;
    protected $table = 'evolucao_enf'; // Nome da tabela no banco de dados
    protected $primaryKey = 'id_evo_enf'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['evolucao_enf', 'observacao_enf', 'pressao_atereial', 'temperatura', 'saturacao','glicose','data']; // Colunas que podem ser preenchidas em massa
    public function getEvolucao_enf(){
        return $this->all();
    }
}