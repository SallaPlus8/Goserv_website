<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['phone', 'email', 'link', 'name'];
}
