<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categoria extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'product_id',
        'nome'    
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
