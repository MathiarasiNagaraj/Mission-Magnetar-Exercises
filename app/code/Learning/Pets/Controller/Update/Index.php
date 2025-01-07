<?php
namespace Learning\Pets\Controller\Update;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Learning\Pets\Model\ResourceModel\Pet\CollectionFactory;

class Index extends Action
{
    protected $resultJsonFactory;
    protected $collectionFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        CollectionFactory $collectionFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $petType = $this->getRequest()->getParam('pet_type');
       
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('pet_type', $petType);
        
        $pets = [];
        foreach ($collection as $pet) {
            $pets[] = $pet->getData();
        }

        return $result->setData($pets);
    }
}
