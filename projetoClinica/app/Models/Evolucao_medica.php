<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecolucao_medica extends Model
{
    use HasFactory;
    protected $table = 'evolucao_medica'; // Nome da tabela no banco de dados
    protected $primaryKey = 'id_evo_med'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['evolucao_med', 'observacao_med', 'data']; // Colunas que podem ser preenchidas em massa
    public function getEvolucao_med(){
        return $this->all();
    }
}