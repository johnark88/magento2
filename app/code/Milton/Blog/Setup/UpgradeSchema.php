<?php

namespace Milton\Blog\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup -> startSetup();
        //only current version of upgrade script will run
        if (version_compare($context -> getVersion(), '0.1.2', '<' )) {
            $setup -> getConnection() -> addColumn(
                $setup -> getTable('milton_blog_post'),
                'movie',
                [   'type' => Table::TYPE_TEXT,
                    'length' => 50,
                    'nullable' => false,
                    'default' => '',
                    'comment' => 'Movie'
                ]
            );
        }
        $setup -> endSetup();
    }
}