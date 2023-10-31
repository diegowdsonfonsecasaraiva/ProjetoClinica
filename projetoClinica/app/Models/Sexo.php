<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $table = 'sexo'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codsexo'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['sexo']; // Colunas que podem ser preenchidas em massa

}
