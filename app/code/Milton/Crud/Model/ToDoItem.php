<?php

namespace Milton\Crud\Model;

use \Magento\Framework\Model\AbstractModel;
use \Milton\Crud\Api\Data\ToDoItemInterface;
use \Magento\Framework\DataObject\IdentityInterface;


class ToDoItem extends AbstractModel implements ToDoItemInterface, IdentityInterface
{
    const CACHE_TAG = 'milton_crud_todoitem';

    protected function _construct()
    {
        $this->_init('Milton\Crud\Model\ResourceModel\ToDoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
