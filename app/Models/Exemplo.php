<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exemplo extends Model
{
    protected $fillable = ['nome', 'quantidade'];

    use HasFactory;
}
