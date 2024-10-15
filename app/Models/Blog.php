<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{

    use HasFactory;
    

    // الحقول القابلة للتعبئة
    protected $fillable = [
        'image',
        'title_en',
        'title_ar',
        'user_id',
        'content_en',
        'content_ar',
        'category_id'
    ];

    // العلاقة مع موديل User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // العلاقة مع موديل Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
