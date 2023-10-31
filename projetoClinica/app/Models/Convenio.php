<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;
    protected $table = 'convenio'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codconvenio'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['convenio']; // Colunas que podem ser preenchidas em massa

}
