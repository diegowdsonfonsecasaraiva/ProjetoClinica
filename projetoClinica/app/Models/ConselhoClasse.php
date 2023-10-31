<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConselhoClasse extends Model
{
    use HasFactory;
    protected $table = 'conselho_classe'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codconselho'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['conselho']; // Colunas que podem ser preenchidas em massa

}
