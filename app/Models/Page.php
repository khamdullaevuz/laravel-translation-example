<?php

namespace App\Models;

use App\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['title', 'content'];
    private mixed $translatedAttributes = ['title', 'content'];
}
