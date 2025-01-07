<?php
namespace  Learning\RouterLogger\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\RouterListInterface;

class LogRouters implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var RouterListInterface
     */
    protected $routerList;

    /**
     * @param LoggerInterface $logger
     * @param RouterListInterface $routerList
     */
    public function __construct(
        LoggerInterface $logger,
        RouterListInterface $routerList
    ) {
        $this->logger = $logger;
        $this->routerList = $routerList;
    }

    /**
     * Execute observer
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $routers = [];
        foreach ($this->routerList as $router) {
            $routers[] = get_class($router);
        }

        $this->logger->info('Routers: ' . implode(', ', $routers));
    }
}
