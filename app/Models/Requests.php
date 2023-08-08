<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\CodecInterface;

class Requests extends Model
{
    use HasFactory;
    protected $fillable = [
        'preco_final',
        'data_pedido',
        'status'
    ];

    public function products(){
        return $this->hasMany(related:Products::class);
    }
    public function clients(){
        return $this->hasOne(related:Clients::class);
    }
}
