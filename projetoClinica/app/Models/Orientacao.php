<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientacao extends Model
{
    use HasFactory;
    protected $table = 'orientacao'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codorientacao'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['orientacao']; // Colunas que podem ser preenchidas em massa
    public function getOrientacao(){
        return $this->all();
    }
}
