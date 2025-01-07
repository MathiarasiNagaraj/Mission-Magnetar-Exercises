<?php

namespace Learning\PluginDemo\Plugin;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;

class ActionDispatchPlugin
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * After dispatch plugin
     *
     * @param Action $subject
     * @param \Magento\Framework\App\ResponseInterface $result
     * @return \Magento\Framework\App\ResponseInterface
     */
 

    public function afterDispatch(Action $subject, $result)
    {
            $fullActionName = $subject->getRequest()->getFullActionName();
        $this->logger->info('Full Action Name plugin : ' . $fullActionName);
        return $result;
    }
}
