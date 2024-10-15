<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    use HasTranslations;

    // الحقول القابلة للترجمة
    public $translatable = ['name'];

    // الحقول القابلة للتعبئة
    protected $fillable = ['image', 'price', 'name', 'category_id'];

    // العلاقة مع الموديل Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
