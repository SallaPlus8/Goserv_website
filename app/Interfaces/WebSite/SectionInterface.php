<?php

namespace App\Interfaces\Website;

interface SectionInterface
{
    // طريقة لجلب جميع العناصر
    public function getAll();

    // طريقة لجلب عنصر حسب المعرف (ID)
    public function getById($id);

    // طريقة لجلب الأقسام مع العناصر المرتبطة بها
    public function getWithItems();
}
