<?php

namespace App\Service;

use App\Repository\CategoryRepository;
use App\Repository\ProductImageRepository;

class TwigGlobalsService
{
    /** @var CategoryRepository */
    private $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */


    /** @var ProductImageRepository */
    private $productImageRepository;
    /**
     * @param ProductImageRepository $productImageRepository
     */

    public function __construct(CategoryRepository $categoryRepository,ProductImageRepository $productImageRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productImageRepository = $productImageRepository;
    }

    public function getMenuCategories()
    {
        return $this->categoryRepository->findAll();
    }
    public function getMenuProducts(){
        return $this->productImageRepository->findAll();
    }


}