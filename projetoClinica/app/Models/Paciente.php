<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes'; // Nome da tabela no banco de dados
    protected $primaryKey = 'cod_paciente'; // Nome da chave primária

    public $timestamps = false; // Se não quiser usar created_at e updated_at

    protected $fillable = [
        'nome_paciente',
        'cidade_paciente',
        'tel_paciente',
        'sexo_paciente',
        'orientacao_paciente',
        'estado_civil_paciente',
        'convenio_paciente',
        'carterinha',
        'abordagem_paciente',
        'data_cadastro',
        'data_saida',
    ];

    // Defina os relacionamentos com outras tabelas
    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cidade_paciente', 'codcidade');
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'sexo_paciente', 'codsexo');
    }

    public function orientacao()
    {
        return $this->belongsTo(Orientacao::class, 'orientacao_paciente', 'codorientacao');
    }

    public function estadoCivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civil_paciente', 'cod_estado_civil');
    }

    public function convenio()
    {
        return $this->belongsTo(Convenio::class, 'convenio_paciente', 'codconvenio');
    }

    public function abordagem()
    {
        return $this->belongsTo(Abordagem::class, 'abordagem_paciente', 'codabordagem');
    }

    public function evolucao_enfermagem()
    {
        return $this->hasMany(Evolucao_enf::class, 'evolucao_enf', 'id_evo_enf');
    }

    public function evolucao_medica()
    {
        return $this->hasMany(Evolucao_medica::class, 'evolucao_medica', 'id_evo_med');
    }
}
