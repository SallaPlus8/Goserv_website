<?php

namespace App\Repositories\WebSite;

use App\Interfaces\Website\SectionInterface;
use App\Models\Section;
use App\Repositories\WebSite\ISectionRepository;

class SectionRepository implements SectionInterface
{
    public function getAll()
    {
        return Section::all();
    }

    public function getById($id)
    {
        return Section::findOrFail($id);
    }

    public function getWithItems()
    {
        // الحصول على اللغة النشطة
        $locale = app()->getLocale();

        // جلب الأقسام مع العناصر المرتبطة مع الترجمة المناسبة
        $sections = Section::with('items')->get();

        // تعديل النتيجة لتحتوي على البيانات الخاصة باللغة فقط
        $sections->transform(function ($section) use ($locale) {
            // استخراج الترجمة للغة النشطة فقط
            $section->title = $section->getTranslation('title', $locale);
            $section->desc = $section->getTranslation('desc', $locale);

            // معالجة العناصر المرتبطة أيضًا
            $section->items->transform(function ($item) use ($locale) {
                $item->title = $item->getTranslation('title', $locale);
                $item->desc = $item->getTranslation('desc', $locale);
                return $item;
            });

            return $section;
        });

        return $sections;
    }

}

