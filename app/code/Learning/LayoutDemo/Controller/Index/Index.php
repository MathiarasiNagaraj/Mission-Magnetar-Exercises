<?php
namespace Learning\LayoutDemo\Controller\Index;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends Action
{
    private $pageFactory;
    
    public function __construct(PageFactory $pageFactory,Context $context){
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        $result = $this->pageFactory->create();
        return $result;
    }
}
