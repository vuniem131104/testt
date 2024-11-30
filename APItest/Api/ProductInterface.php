<?php
namespace Test\APItest\Api;

/**
 * Interface ProductInterface
 * @package Test\APItest\Api
 */
interface ProductInterface
{
    /**
     * Get the list of products
     *
     * @return \Magento\Catalog\Api\Data\ProductInterface[] List of products
     */
    public function getProductList();
}
