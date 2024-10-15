<?php

namespace App\Models;

use App\Models\AboutUs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUsAdvantage extends Model
{

    use HasFactory;

    use HasTranslations;

    public $translatable = ['title'];

    protected $fillable = ['title', 'about_us_id'];

    public function aboutUs()
    {
        return $this->belongsTo(AboutUs::class);
    }
}
