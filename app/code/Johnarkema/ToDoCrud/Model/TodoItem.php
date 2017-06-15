<?php
namespace Johnarkema\ToDoCrud\Model;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use \Johnarkema\ToDoCrud\Api\Data\TodoItemInterface;
use \Magento\Framework\DataObject\IdentityInterface;


class TodoItem extends AbstractDb implements TodoItemInterface, IdentityInterface
{
    const CACHE_TAG = 'johnarkema_todocrud_todoitem';

    protected function _construct()
    {
        $this->_init('Johnarkema\ToDoCrud\Model\ResourceModel\TodoItem',
            'johnarkema_todocrud_todoitem_id');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
