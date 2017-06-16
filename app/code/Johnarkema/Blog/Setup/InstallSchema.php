<?php

namespace Johnarkema\Blog\Setup;

use Magento\Backend\Block\Widget\Tab;
use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package Toptal\Blog\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup -> startSetup();

        $tableName = $setup -> getTable('johnarkema_blog_post');

        if ($setup ->getConnection()-> isTableExists($tableName) != true) {
            $table = $setup -> getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'post_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'ID'
                )->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Title'
                )->addColumn(
                    'content',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Content'
                )->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )

                ->setComment('John Arkema Blog - Posts');
            $setup -> getConnection() -> createTable($table);

        }//end if


        $setup -> endSetup();

    }//end public function install
}//end class InstallSchema