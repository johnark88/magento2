<?php

namespace Milton\Blog\Controller\Index;


use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;


class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);

        $this -> resultPageFactory = $resultPageFactory;

    }//end public function construct


    public function execute()
    {

       $resultPage = $this -> resultPageFactory -> create();

       return $resultPage;

    }// end public function execute
}//end class