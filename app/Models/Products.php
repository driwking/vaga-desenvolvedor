<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_produto',
        'titulo_product',
        'descricao',
        'preco',
        'estoque'
    ];

    public function request(){
        return $this->hasMany(related:Requests::class);
    }
}
