<?php

namespace App\Services;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Support\Collection;

class NewsService
{
    protected NewsRepository $newsRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @param array $newsData
     * @return News
     */
    public function createNews(array $newsData): News
    {
        return $this->newsRepository->createNews($newsData);
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->newsRepository->getAllNews();
    }

    /**
     * @param $id
     * @return News|null
     */
    public function getNewsById($id): News|null
    {
        return $this->newsRepository->getNewsById($id);
    }

    /**
     * @param $query
     * @return Collection|null
     */
    public function getNewsByQuery($query): Collection|null
    {
        return $this->newsRepository->getNewsByQueryString($query);
    }
}
