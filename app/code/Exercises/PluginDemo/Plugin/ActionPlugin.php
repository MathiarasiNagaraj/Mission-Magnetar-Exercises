<?php

namespace Exercises\PluginDemo\Plugin;
use Psr\Log\LoggerInterface;
use \Magento\Framework\App\Action\Action;
class ActionPlugin  {
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function execute(){

    }
    public function afterDispatch(Action $subject,$result){
       $name= $subject->getRequest()->getActionName();
        $this->logger->debug(__METHOD__.'LOGGING AFTER DISPATCH'.json_encode($name));
        return $result;
    }
}