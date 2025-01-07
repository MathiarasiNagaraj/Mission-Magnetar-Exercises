<?php

namespace Learning\TextRender\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\LayoutInterface;

class Index extends Action
{

    protected $layout;

   
    public function __construct(
        Context $context,
        LayoutInterface $layout
    ) {
        parent::__construct($context);
        $this->layout = $layout;
    }


    public function execute()
    {
        // Create the block
        $block = $this->layout->createBlock(\Magento\Framework\View\Element\Text::class);
        $block->setText('Hello World');
        $resultRaw = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $resultRaw->setContents($block->toHtml());

        return $resultRaw;
    }
}
