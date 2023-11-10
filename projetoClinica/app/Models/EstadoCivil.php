<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;
    protected $table = 'estado_civil'; // Nome da tabela no banco de dados
    protected $primaryKey = 'cod_estado_civil'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['estado_civil']; // Colunas que podem ser preenchidas em massa
    public function getEstadoCivil(){
        return $this->all();
    }
}
