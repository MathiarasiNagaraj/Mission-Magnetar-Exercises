<?php
namespace Learning\ObserverDemo\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogFullActionName implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

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
     * Execute method
     *
     * @param Observer $observer
     * @return void
     */
    
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getRequest();
        $fullActionName = $request->getFullActionName();
        $this->logger->info('Full Action Name observer: ' . $fullActionName);
    }
}
