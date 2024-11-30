<?php
namespace Test\APItest\Model;

use Test\APItest\Api\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

/**
 * Class Product
 * @package Test\APItest\Model
 */
class Product implements ProductInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * Product constructor.
     * @param ProductRepositoryInterface $productRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * Get the list of products
     *
     * @return \Magento\Catalog\Api\Data\ProductInterface[]
     */
    public function getProductList()
    {
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $productList = $this->productRepository->getList($searchCriteria);
        return $productList->getItems();
    }
}
