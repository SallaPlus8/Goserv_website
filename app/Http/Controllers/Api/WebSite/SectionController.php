<?php

namespace App\Http\Controllers\Api\WebSite;


use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Services\Api\WebSite\SectionService;
use App\Helpers\ApiResponse;
class SectionController extends Controller
{
    protected $sectionService;

    public function __construct(SectionService $sectionService)
    {
        $this->sectionService = $sectionService;
    }

    // عرض جميع الأقسام مع العناصر عبر API
    public function index()
    {
        $sections = $this->sectionService->getAllSectionsWithItems();
        return ApiResponse::sendResponse(201, 'ِAll Sections Return',$sections);
    }

    // عرض قسم معين عبر API
    public function show($id): JsonResponse
    {
        $section = $this->sectionService->getSectionById($id);
        return response()->json($section);
    }
}
