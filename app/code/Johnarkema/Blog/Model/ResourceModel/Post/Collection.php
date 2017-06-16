<?php

namespace Johnarkema\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {

        $this -> _init('Johnarkema\Blog\Model\Post', 'Johnarkema\Blog\Model\ResourceModel\Post');

    }//end protected function
}//end class Collection