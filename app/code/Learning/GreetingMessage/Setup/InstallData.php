<?php

namespace Learning\GreetingMessage\Setup;

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
            /** messages to install */
        $data = [
            ['message' => 'I am Batman'],
            ['message' => 'I am Groot']
        ];


            foreach ($data as $bind) {
                 $setup->getConnection()
                    ->insertForce ($setup->getTable('greetingMessage'),$bind);
        }//end for each

    }//end public function

}//end class