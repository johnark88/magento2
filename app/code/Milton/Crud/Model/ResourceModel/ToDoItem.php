<?php

namespace Milton\Crud\Model\ResourceModel;

use  \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ToDoItem extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('milton_crud_todoitem','milton_crud_todoitem_id');
    }
}
