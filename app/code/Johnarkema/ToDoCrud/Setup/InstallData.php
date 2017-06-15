<?php
namespace Johnarkema\ToDoCrud\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;



class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data =[
            ['item_text' => 'First To Do'],
            ['item_text' => 'Another To Do']
        ];

        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('johnarkema_todocrud_todoitem'), $bind);
        }//end for each

    }//end public function

}//end class
