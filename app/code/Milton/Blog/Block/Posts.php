<?php

namespace Milton\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Milton\Blog\Model\ResourceModel\Post\Collection as PostCollection;
use \Milton\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use \Milton\Blog\Model\Post;

class Posts extends Template
{

    protected $_postCollectionFactory = null;

    public function __construct(Context $context, PostCollectionFactory $postCollectionFactory , array $data = [])
    {
        $this -> _postCollectionFactory = $postCollectionFactory;

        parent::__construct($context, $data);

    }//end function


    public function getPosts()
    {
        $postCollection = $this -> _postCollectionFactory -> create();
        $postCollection -> addFieldToSelect( '*' ) -> load();

        return $postCollection -> getItems();

    }//end function

    public function getPostUrl(Post $post)
    {
        return '/blog/post/view/id/' . $post -> getId();
    }//end function

}//end class