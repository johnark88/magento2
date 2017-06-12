<?php

namespace Johnarkema\HelloWorldMVVM\Controller\Hello;

class World extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo '<p> Did it</p>';
        var_dump(__METHOD__);
    }

}