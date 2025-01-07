<?php

namespace Learning\ResultObject\Controller\JsonResult;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\JsonFactory;

class JsonResult extends Action
{
    /**
     * @var JsonFactory
     */
    protected $jsonFactory;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context $context
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        $result = ['message' => 'Hello World'];
        $jsonResult = $this->jsonFactory->create();
        $jsonResult->setData($result);
        return $jsonResult;
    }
}
