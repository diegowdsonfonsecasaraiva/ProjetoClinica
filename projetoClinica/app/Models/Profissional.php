<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;
    protected $table = 'prof'; // Nome da tabela no banco de dados
    protected $primaryKey = 'codprof'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = [
        'nomeprof',
        'cidadeprof',
        'telprof',
        'sexoprof',
        'orientacaoprof',
        'estado_civilprof',
        'especialidade_prof',
        'abordagem',
        'conselho_classeprof',
        'num_conselho',
        'dataentprof',
        'datasaidaprof',
    ];

    // Defina os relacionamentos com outras tabelas
    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cidadeprof', 'codcidade');
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'sexoprof', 'codsexo');
    }

    public function orientacao()
    {
        return $this->belongsTo(Orientacao::class, 'orientacaoprof', 'codorientacao');
    }

    public function estadoCivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civilprof', 'cod_estado_civil');
    }

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class, 'especialidade_prof', 'codespecialidades');
    }

    public function abordagem()
    {
        return $this->belongsTo(Abordagem::class, 'abordagem', 'codabordagem');
    }

    public function conselhoClasse()
    {
        return $this->belongsTo(ConselhoClasse::class, 'conselho_classeprof', 'codconselho');
    }
}
