<?php

namespace Milton\Blog\Block;

use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\Registry;
use \Milton\Blog\Model\Post;
use \Milton\Blog\Model\PostFactory;
use \Milton\Blog\Controller\Post\View as ViewAction;


class View extends Template
{
    protected $_coreRegistry;

    protected $_post = null;

    protected $_postFactory = null;

    public function __construct(Context $context, Registry $coreRegistry, PostFactory $postFactory, array $data = [])
    {
        $this -> _postFactory = $postFactory;
        $this -> _coreRegistry = $coreRegistry;

        parent::__construct($context, $data);
    }


    public function getPost()
    {
        if ($this -> _post === null){
            $post = $this -> _postFactory -> create();
            $post -> load($this -> _getPostId());

            if (!$post -> getID()){
                throw new LocalizedException(__('Post not Found'));
            }//end nested if

            $this -> _post = $post;

        }//end if

        return $this -> _post;
    }//end function getPost

    protected function _getPostId()
    {
        return (int) $this -> _coreRegistry -> registry(ViewAction::REGISTRY_KEY_POST_ID);

    }//end protected function getPostId
}//end class