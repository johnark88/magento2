<?php

namespace Milton\Blog\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface {

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** items to install */
        $data = [
            [   'title' => 'Title 3',
                'content' => 'More content',
            ],
            [   'title' => 'Title 4',
                'content' => 'more content 4'
            ]
        ];


        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce ($setup->getTable('milton_blog_post'),$bind);
        }
    }
}