<?php

namespace Learning\ResultObject\Controller\ForwardUrl;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;

class ForwardUrl extends Action
    {
 /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
      * @var RequestInterface
      */
    private $request;

    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     */
    public function __construct(PageFactory $pageFactory, RequestInterface $request,Context $context)
    {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
        return parent::__construct($context);
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {

        return $this->pageFactory->create();
    }
    }
