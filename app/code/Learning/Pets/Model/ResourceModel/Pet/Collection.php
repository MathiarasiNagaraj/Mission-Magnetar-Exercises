<?php
namespace Learning\Pets\Model\ResourceModel\Pet;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Learning\Pets\Model\Pet as PetModel;
use Learning\Pets\Model\ResourceModel\Pet as PetResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'pet_id';

    protected function _construct()
    {
        $this->_init(PetModel::class, PetResourceModel::class);
    }
}

