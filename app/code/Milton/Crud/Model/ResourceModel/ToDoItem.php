<?php
namespace Milton\Crud\Model\ResourceModel;
class ToDoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('milton_crud_todoitem','milton_crud_todoitem_id');
    }
}
