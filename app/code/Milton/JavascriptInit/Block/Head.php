<?php

namespace Milton\JavascriptInit\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use  \Magento\Framework\View\Asset\Repository;


class Head extends Template
{
    public $assetRepo;

    public function __construct(Context $context, array $data = [], Repository $assetRepo)
    {
        $this -> assetRepo = $assetRepo;
        parent::__construct($context, $data);
    }


}//end class Head