<?php

namespace Learning\GreetingMessage\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface

{        /**
         * {@inheritdoc}
         * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
         */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /** create $table greeting_message */
        $setup->startSetup();
        $tableName = $setup -> getTable('greetingMessage');

        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'greeting_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity'=>true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Greeting ID'
                )
                ->addColumn(
                    'message',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false, 'default' => ''],
                    'Message'
                )

                ->setComment("Greeting Message table");

            $setup->getConnection() -> createTable($table);
        }

        $setup->endSetup();
    }
}