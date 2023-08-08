<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_cliente',
        'cpf_cliente',
        'email_cliente'
    ];

    public function request(){
        return $this->belongsTo(related:Requests::class);
    }
}
