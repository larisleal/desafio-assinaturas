<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    protected $table = 'faturas';

    protected $fillable = [
        'cadastro_id',
        'assinatura_id',
        'descricao',
        'vencimento',
        'valor',
        'pago',
    ];

    public static function rules($id = null)
    {
        return [
            'cadastro_id' => 'exists:cadastros,id',
            'assinatura_id' => 'exists:assinaturas,id',
            'descricao' => 'string|max:255',
            'vencimento' => 'date',
            'valor' => 'numeric|min:0',
            'pago' => 'boolean',
        ];
    }

    protected $dates = ['vencimento'];

    public function cadastro()
    {
        return $this->belongsTo(Cadastro::class, 'cadastro_id');
    }

    public function assinatura()
    {
        return $this->belongsTo(Assinatura::class, 'assinatura_id');
    }
}
