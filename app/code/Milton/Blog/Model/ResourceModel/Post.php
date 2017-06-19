<?php

namespace Milton\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;


class Post extends AbstractDb
{
    protected function _construct()
    {

        $this -> _init('milton_blog_post', 'post_id');

    }// end protected function
}//end class