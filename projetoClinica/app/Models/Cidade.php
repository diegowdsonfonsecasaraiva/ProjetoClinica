<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $table = 'cidade'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codcidade'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['estado']; // Colunas que podem ser preenchidas em massa

    public function getCidades(){
        return $this->all();
    }
}
