<?php
namespace Johnarkema\ToDoCrud\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Johnarkema\ToDoCrud\Model\TodoItem','Johnarkema\ToDoCrud\Model\ResourceModel\TodoItem');
    }
}
