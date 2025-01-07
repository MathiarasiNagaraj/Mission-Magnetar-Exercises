<?php
namespace Learning\Pets\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Pet extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('learning_pets', 'pet_id');
    }
}
?>
