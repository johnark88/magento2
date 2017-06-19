<?php

namespace Milton\Blog\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\UpgradeSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $setup -> startSetup();

        if ($context -> getVersion() && version_compare($context -> getVersion(), '0.1.1') < 0)
        {
            $tableName = $setup -> getTable('milton_blog_post');

            $data = [
                [
                    'title' => 'This is post 1',
                    'content' => 'This is my content. Love it.',
                ],
                [
                    'title' => 'This is post 2',
                    'content' => 'This is more content. It is great content. Love it.',
                ],
                [
                    'title' => 'This is post 3',
                    'content' => 'This is post 3 content. It is worthy',
                ],
            ];

            $setup
                -> getConnection()
                ->insertMultiple($tableName, $data);
        }//end if

        $setup -> endSetup();

    }//end public function
}// end class