<?php

namespace Johnarkema\HelloWorldMVVM\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {

        $this -> setMessage('Hello again');

    }//end protected function prepareLayout

}//end class Main