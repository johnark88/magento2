<?php
namespace Milton\HelloAdmin\Controller\Adminhtml\Index;

use \Magento\Backend\App\Action;
Use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;


class Index extends Action
{
    
    const ADMIN_RESOURCE = 'Index';       
        
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
        $page = $this -> resultPageFactory -> create();
        $page -> setActiveMenu('Milton_HelloAdmin::a_menu_item');
        $page -> getConfig() -> getTitle() -> prepend(__('Admin page Title'));
        return $page;
    }

    protected function _isAllowed()
    {
        return $this -> _authorization -> isAllowed('Milton_HelloAdmin::menu_1');
    }
}//end class Index
