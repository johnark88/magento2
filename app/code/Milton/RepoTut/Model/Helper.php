<?php

namespace Milton\RepoTut\Model;

use \Magento\Cms\Model\PageRepository;
use \Magento\Catalog\Model\ProductRepository;
use \Magento\Framework\Api\FilterBuilder;
use \Magento\Framework\Api\Search\FilterGroupBuilder;
use \Magento\Framework\Api\SearchCriteriaBuilder;



class Helper
{
    protected $pageRepository;
    protected $productRepository;
    protected $filterBuilder;
    protected $filterGroupBuilder;
    protected $searchCriteriaBuilder;


    public function __construct(PageRepository $pageRepository, ProductRepository $productRepository, FilterBuilder $filterBuilder,
                                                    FilterGroupBuilder $filterGroupBuilder, SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this -> pageRepository         = $pageRepository;
        $this->productRepository        = $productRepository;
        $this->filterBuilder            = $filterBuilder;
        $this->filterGroupBuilder       = $filterGroupBuilder;
        $this->searchCriteriaBuilder    = $searchCriteriaBuilder;


    }//end public function
}//end class helper