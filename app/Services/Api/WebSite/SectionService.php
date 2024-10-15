<?php


namespace App\Services\Api\WebSite;

use App\Repositories\WebSite\ISectionRepository;
use App\Repositories\WebSite\SectionRepository;

class SectionService
{
    protected $sectionRepository;

    public function __construct(SectionRepository $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
    }

    public function getAllSectionsWithItems()
    {
        return $this->sectionRepository->getWithItems();
    }

    public function getSectionById($id)
    {
        return $this->sectionRepository->getById($id);
    }
}
