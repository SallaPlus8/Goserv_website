<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutUsItem extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['title','desc'];

    protected $fillable = ['title', 'desc', 'about_us_id'];

    public function aboutUs()
    {
        return $this->belongsTo(AboutUs::class);
    }
}
