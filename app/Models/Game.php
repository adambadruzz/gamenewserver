<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_game';
    protected $fillable = [
        'cover',
        'gamenews_name',
        'short_description',
        'platform',
        'description',
        'author_id'
    ];
}
