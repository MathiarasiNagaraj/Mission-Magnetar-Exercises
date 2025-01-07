<?php
namespace Learning\Pets\Model;

use Magento\Framework\Model\AbstractModel;

class Pet extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Learning\Pets\Model\ResourceModel\Pet'::class);
    }
}
