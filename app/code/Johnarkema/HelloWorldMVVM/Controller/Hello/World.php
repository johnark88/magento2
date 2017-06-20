<?php

namespace Johnarkema\HelloWorldMVVM\Controller\Hello;


use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\App\Action\Action;

class World extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this -> pageFactory = $pageFactory;
        return parent::__construct($context);

    }//end public function construct


    public function execute()
    {

        $page_object = $this -> pageFactory -> create();
        return $page_object;

    }// end public function execute


} //end class World