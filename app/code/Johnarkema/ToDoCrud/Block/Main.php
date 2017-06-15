<?php
namespace Johnarkema\ToDoCrud\Block;

use \Magento\Framework\View\Element\Template;
Use \Magento\Framework\View\Element\Template\Context;
use \Johnarkema\ToDoCrud\Model\ResourceModel\TodoItemFactory;

class Main extends Template
{
    protected $toDoFactory;

    public function __construct(Context $context, TodoItemFactory $toDoFactory)
    {
        $this -> toDoFactory = $toDoFactory;
        parent::__construct($context);

    }//end function construct


    function _prepareLayout()
    {
    }//end function layout
}//end class Main
