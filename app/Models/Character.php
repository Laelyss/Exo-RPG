<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pseudo',
        'class',
        'magic',
        'power',
        'agility',
        'intelect'
    ];
}
