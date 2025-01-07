<?php

namespace Learning\Pets\Block;

use Magento\Framework\View\Element\Template;
use Learning\Pets\Model\ResourceModel\Pet\CollectionFactory;

class PetsList extends Template
{
    protected $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getPets()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getItems();
    }
}
