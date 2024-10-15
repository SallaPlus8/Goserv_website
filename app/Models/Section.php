<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title', 'desc'];

    protected $fillable = ['title', 'desc', 'image', 'link'];
    
    public function items()
    {
        return $this->hasMany(SectionItem::class);
    }
}
