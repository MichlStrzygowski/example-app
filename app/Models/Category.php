<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public const VALIDATION_STORE_RULES = [
        'name_pl' => 'required|string|max:255|min:3',
        'name_en' => 'required|string|max:255|min:3',
        'name_de' => 'required|string|max:255|min:3',
        'name_fr' => 'required|string|max:255|min:3',
    ];

    public const VALIDATION_UPDATE_RULES = [
        'name_pl' => 'string|max:255|min:3',
        'name_en' => 'string|max:255|min:3',
        'name_de' => 'string|max:255|min:3',
        'name_fr' => 'string|max:255|min:3',
    ];

    protected $fillable = [
        'name_pl',
        'name_en',
        'name_de',
        'name_fr',
    ];
}
