<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'pergunta',
        'imagem'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}