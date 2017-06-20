<?php

namespace Johnarkema\JavascriptCssExample\Block;

use Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use  \Magento\Framework\View\Asset\Repository;



class Head extends Template
{
    public $assetRepository;

    public function __construct(Context $context, Repository $assetRepository, array $data =[] )
    {
        $this -> assetRepo = $assetRepository;
        return parent::__construct($context, $data);

    }// end public function construct
} // end class Head