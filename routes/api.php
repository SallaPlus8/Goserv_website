<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WebSite\SectionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('sections', [SectionController::class, 'index']); // عرض جميع الأقسام
Route::get('sections/{id}', [SectionController::class, 'show']); // عرض قسم معين
