<?php
namespace Feedaty\Badge\Model\Config\Source;

use \Magento\Framework\Option\ArrayInterface;

class ProductBadgeStyle implements ArrayInterface
{
    public function toOptionArray()
    {
        $return = [
        	["value" => "product","label" => __("Product Bagde Style")],
            ["value" => "carouselproduct","label" => __("Product Carousel Bagde Style")],
            ["value" => "product_tab","label" => __("Product Tab Bagde Style")],
        ];

        return $return;
    }
}