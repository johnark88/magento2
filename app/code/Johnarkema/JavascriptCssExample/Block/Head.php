<?php

namespace Johnarkema\JavascriptCssExample\Block;

use Magento\Framework\View\Element\Template;

class Head extends \Magento\Framework\View\Element\Template
{
    public $assetRepository;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                    array $data =[], \Magento\Framework\View\Asset\Repository $assetRepository
    )
    {
        $this -> assetRepository = $assetRepository;
        return parent::__construct($context, $data);

    }// end public function construct
} // end class Head