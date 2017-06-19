<?php
namespace Milton\Crud\Model;
class ToDoItem extends \Magento\Framework\Model\AbstractModel implements \Milton\Crud\Api\Data\ToDoItemInterface, \Magento\Framework\DataObject\IdentityInterface
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
