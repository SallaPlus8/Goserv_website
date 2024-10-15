<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutUs extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['desc1','desc2'];

    protected $fillable = ['desc1', 'desc2'];


    public function items()
    {
        return $this->hasMany(AboutUsItem::class);
    }

    public function advantages()
    {
        return $this->hasMany(AboutUsAdvantage::class);
    }
}
