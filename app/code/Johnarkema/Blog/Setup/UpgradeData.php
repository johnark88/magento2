<?php

namespace Johnarkema\Blog\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package Toptal\Blog\Setup
 */

class UpgradeData implements UpgradeDataInterface {

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup -> startSetup();

        if ($context -> getVersion() && version_compare($context -> getVersion(), '0.1.2') < 0){
            $tableName = $setup -> getTable('johnarkema_blog_post');

            $data = [
                [   'title' => 'My First Post',
                    'content' => 'This is my content. Love my content',
                ],
                [   'title' => 'My second Post',
                    'content' => 'This is more content. It is great content. Love it',
                ],
            ];//end data

            $setup -> getConnection() -> insertMultiple($tableName, $data);

        }//end if

        $setup -> endSetup();

    }//end public function upgrade

}//end class upgrade data