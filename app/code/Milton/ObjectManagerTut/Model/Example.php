<?php

namespace Milton\ObjectManagerTut\Model;

class Example
{
    public $message = "Hello Magento2";


    public function getHelloMessage()
    {
        return $this->message;

    }//end function get hello message
}//end class