<?php
namespace Johnarkema\ToDoCrud\Setup;

use \Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup,
                                \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        //START: install stuff
        //END:   install stuff
        
        //START table setup
        $table = $installer->getConnection()->newTable(
            $installer->getTable('johnarkema_todocrud_todoitem')
        )->addColumn(
            'johnarkema_todocrud_todoitem_id',
            Table::TYPE_INTEGER,
            null,
            [ 'identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true, ],
            'Entity ID'
        )->addColumn(
            'item_text',
            Table::TYPE_TEXT,
            255,
            [ 'nullable' => false, ],
            'Text of the to do item'
        )->addColumn(
            'date_completed',
            Table::TYPE_DATETIME,
            null,
            [ 'nullable' => true],
            'Date item was completed'
        )->addColumn(
            'creation_time',
            Table::TYPE_TIMESTAMP,
            null,
            [ 'nullable' => true],
            'Creation Time'
        )->addColumn(
            'update_time',
            Table::TYPE_TIMESTAMP,
            null,
            [ 'nullable' => true],
            'Modification Time'
        )->addColumn(
            'is_active',
            Table::TYPE_SMALLINT,
            null,
            ['nullable' => false,'default' => '1',],
            'Is Active'
        );
        $installer->getConnection()->createTable($table);
        //END   table setup
$installer->endSetup();
    }
}
