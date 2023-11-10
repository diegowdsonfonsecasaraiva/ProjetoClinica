<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abordagem extends Model
{
    use HasFactory;
    protected $table = 'Abordagem'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codabordagem'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = ['Abordagem']; // Colunas que podem ser preenchidas em massa
    public function getAbordagem(){
        return $this->all();
    }
}
