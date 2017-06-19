<?php


namespace Milton\Crud\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Milton\Crud\Model\ToDoItemFactory;

class Main extends Template
{

    protected $toDoFactory;

    public function __construct(Context $context, ToDoItemFactory $toDoFactory, array $data = [])
    {
        $this -> toDoFactory = $toDoFactory;
        parent::__construct($context, $data);
    }


    function _prepareLayout()
    {
            //Save this information
//        $todo = $this -> toDoFactory -> create();
//        $todo -> setData('item_text', 'Do those things about the stuff') -> save();
//        var_dump('Done');
//        exit;

            //this will fetch information (like the one saved above)
        $todo = $this -> toDoFactory -> create();
        $todo = $todo -> load(1);
        var_dump($todo -> getData());
        exit;
    }
}//end class
