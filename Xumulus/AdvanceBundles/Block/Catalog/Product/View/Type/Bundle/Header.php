<?php

namespace Xumulus\AdvanceBundles\Block\Catalog\Product\View\Type\Bundle;

class Header extends \Magento\Framework\View\Element\Template 
{
    public $_objectManager;
    public $_warrantyFactory;
    
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectmanager,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_objectManager = $objectmanager;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }

    public function getProductImageUrl()
    {
        $imgUrl = $this->_objectManager->get('\Magento\Catalog\Helper\Image');
        $image_url_medium = $imgUrl->init($this->getProduct(), 'product_page_image_small')->setImageFile($this->getProduct()->getFile())->resize(300,300)->getUrl();
        return $image_url_medium;
    }

    public function getLargeImageUrl()
    {
        $imgUrl = $this->_objectManager->get('\Magento\Catalog\Helper\Image');
        $image_url_large = $imgUrl->init($this->getProduct(), 'product_page_image_small')->setImageFile($this->getProduct()->getFile())->resize(500,500)->getUrl();
        return $image_url_large;
    }

    public function getProduct()
    {        
        return $this->_registry->registry('current_product');
    }    
    
}
