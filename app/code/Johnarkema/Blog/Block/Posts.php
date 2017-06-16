<?php

namespace Johnarkema\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Johnarkema\Blog\Model\ResourceModel\Post\Collection as PostCollection;
use  \Johnarkema\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use \Johnarkema\Blog\Model\Post;


class Posts extends Template
{
    protected $_postCollectionFactory = null;




    public function __construct(Template\Context $context, PostCollectionFactory $postCollectionFactory, array $data = [])
    {

        $this -> _postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);

    }//end public function

    public function getPostUrl( Post $post)
    {
        return '/blog/post/view/id' . $post -> getId();
    }
}//end class