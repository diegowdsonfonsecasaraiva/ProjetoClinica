<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    use HasFactory;
    protected $table = 'especialidades'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codespecialidades'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['especialidades']; // Colunas que podem ser preenchidas em massa

}
