<?php
namespace Milton\Crud\Model\ResourceModel\ToDoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Milton\Crud\Model\ToDoItem','Milton\Crud\Model\ResourceModel\ToDoItem');
    }
}
