<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nome', 'endereco','observacao'];//definindo os campos que serão gravados
    use HasFactory;
}
