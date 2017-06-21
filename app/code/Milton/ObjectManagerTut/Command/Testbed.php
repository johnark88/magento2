<?php

namespace Milton\ObjectManagerTut\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class Testbed extends AbstractCommand
{
    protected function configure()
    {
        $this -> setName('ps:object-manager-tut');
        $this -> setDescription('A cli playground for testing commands');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output -> writeln("You did it!! YAY!! ");
    }


}//end class testbed