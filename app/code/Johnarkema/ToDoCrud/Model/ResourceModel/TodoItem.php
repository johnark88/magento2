<?php
namespace Johnarkema\ToDoCrud\Model\ResourceModel;
class TodoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('johnarkema_todocrud_todoitem','johnarkema_todocrud_todoitem_id');
    }
}
