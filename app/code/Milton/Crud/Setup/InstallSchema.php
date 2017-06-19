<?php


namespace Milton\Crud\Setup;

use \Magento\Framework\DB\Ddl\Table;
use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();


        //START table setup
        $table = $installer -> getConnection() -> newTable(
            $installer->getTable('milton_crud_todoitem')
        )->addColumn(
            'milton_crud_todoitem_id',
            Table::TYPE_INTEGER,
            null,
            [ 'identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true, ],
            'Entity ID'
        )->addColumn(
            'item_text',
            Table::TYPE_TEXT,
            255,
            [ 'nullable' => false, ],
            'Item to do Text'
        )->addColumn(
            'date_completed',
            Table::TYPE_DATETIME,
            null,
            ['nullable' => true],
            'Date item was completed'
        )->addColumn(
            'creation_time',
            Table::TYPE_TIMESTAMP,
            null,
            [],
            'Creation Time'
        )->addColumn(
            'update_time',
            Table::TYPE_TIMESTAMP,
            null,
            [],
            'Modification Time'
        )->addColumn(
            'is_active',
            Table::TYPE_SMALLINT,
            null,
            [ 'nullable' => false, 'default' => '1', ],
            'Is Active'
        );
        $installer->getConnection()->createTable($table);
        //END   table setup
$installer->endSetup();
    }
}
