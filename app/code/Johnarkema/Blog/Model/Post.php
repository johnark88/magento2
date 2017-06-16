<?php

namespace Johnarkema\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Johnarkema\Blog\Api\Data\PostInterface;


class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    const CACHE_TAG = 'johnarkema_blog_post';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this -> _init('Johnarkema\Blog\Model\ResourceModel\Post');
    }//end protected function


    /**
     * @return string|null
     *
     */
    public function getTitle()
    {
        return $this -> getData(self::TITLE);
    }

    /**
     *
     */
    public function getContent()
    {
        return $this -> getData(self::CONTENT);
    }

    /**
     *
     */
    public function getCreatedAt()
    {
        return $this -> getData(self::CREATED_AT);
    }

    /**
     *
     */
    public function getId()
    {
        return $this -> getData(self::POST_ID);
    }

    /**
     *
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this -> getId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
       return $this -> setData(self::TITLE, $title);
    }
    /**
     *
     */
    public function setContent($content)
    {
       return $this -> setData(self::CONTENT, $content);
    }
    /**
     *
     */
    public function setCreatedAt($createdAt)
    {
        return $this -> setData(self::CREATED_AT);
    }
    /**
     *
     */
    public function setId($id)
    {
        return $this -> setData(self::POST_ID, $id);
    }
}//end class Post