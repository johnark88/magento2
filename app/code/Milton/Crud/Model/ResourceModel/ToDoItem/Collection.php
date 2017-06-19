<?php

namespace Milton\Crud\Model\ResourceModel\ToDoItem;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Milton\Crud\Model\ToDoItem','Milton\Crud\Model\ResourceModel\ToDoItem');
    }
}
