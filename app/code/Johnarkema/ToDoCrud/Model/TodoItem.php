<?php
namespace Johnarkema\ToDoCrud\Model;
class TodoItem extends \Magento\Framework\Model\AbstractModel implements \Johnarkema\ToDoCrud\Api\Data\TodoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'johnarkema_todocrud_todoitem';

    protected function _construct()
    {
        $this->_init('Johnarkema\ToDoCrud\Model\ResourceModel\TodoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
