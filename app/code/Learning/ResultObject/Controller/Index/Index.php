<?php
namespace Learning\ResultObject\Controller\RawResult;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class  Index extends Action
{
    public function __construct(Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {
        echo 'helloworld';
    }
}
