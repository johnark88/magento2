<?php

namespace Learning\GreetingMessage\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class UpgradeData implements UpgradeDataInterface {
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup -> startSetup();

        if ($context -> getVersion() && version_compare($context -> getVersion(), '0.0.1') < 0) {
            $table = $setup -> getTable('greetingMessage');
            $setup -> getConnection()
                -> insertForce($table, ['message' => '60% of the time, it works every time', 'movie' => 'Anchorman']);

            $setup -> getConnection()
                -> update($table, ['movie' => 'Batman Begins'], 'greeting_id IN (1)');
            $setup -> getConnection()
                -> update($table, ['movie' => 'Guardians of the Galaxy'], 'greeting_id IN (2)');

        }

        $setup->endSetup();
    }
}