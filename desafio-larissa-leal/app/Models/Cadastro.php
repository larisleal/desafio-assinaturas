<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'cadastros';

    protected $fillable = [
        'codigo',
        'nome',
        'email',
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'pais',
    ];

    public static function rules()
    {
        return [
            'codigo' => 'nullable',
            'nome' => 'nullable',
            'email' => 'email|unique:cadastros,email',
            'telefone' => 'nullable',
            'endereco' => 'nullable',
            'cidade' => 'nullable',
            'estado' => 'nullable',
            'pais' => 'nullable',
        ];
    }

    public function assinaturas()
    {
        return $this->hasMany(Assinatura::class, 'cadastro_id');
    }

    public function faturas()
    {
        return $this->hasMany(Fatura::class, 'cadastro_id');
    }
}
