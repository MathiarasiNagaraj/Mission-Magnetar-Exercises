<?php
namespace Learning\ResultObject\Controller\Redirect;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Redirect extends Action
    {
    public function execute()
        {


        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('customroute/rawresult/rawresult');
        return $resultRedirect;
        }
    }
