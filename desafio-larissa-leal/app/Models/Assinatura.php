<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    protected $table = 'assinaturas';

    protected $fillable = [
        'cadastro_id',
        'descricao',
        'valor',
        'vencimento',
        'inicio',
        'fim',
    ];

    public static function rules($id = null)
    {
        return [
            'cadastro_id' => 'exists:cadastros,id',
            'descricao' => 'string',
            'valor' => 'numeric|min:0',
            'vencimento' => 'date|after_or_equal:inicio',
            'inicio' => 'date',
            'fim' => 'nullable|date|after_or_equal:inicio',
        ];
    }

    protected $dates = ['inicio', 'fim'];

    public function cadastro()
    {
        return $this->belongsTo(Cadastro::class, 'cadastro_id');
    }

    public function faturas()
    {
        return $this->hasMany(Fatura::class, 'assinatura_id');
    }
}
