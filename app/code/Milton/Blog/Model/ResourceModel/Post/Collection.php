<?php

namespace Milton\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this -> _init('Milton\Blog\Model\Post', 'Milton\Blog\Model\ResourceModel\Post');

    }//end protected function

}//end class