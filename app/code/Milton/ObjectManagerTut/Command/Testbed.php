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
        $manager = $this -> getObjectManager();
        $object = $manager-> get('\Milton\ObjectManagerTut\Model\Example');
        $object -> message = 'Hello everyone';
        $output -> writeln($object -> getHelloMessage());

        //will print out the same message'Hello everyone' this displays magentos automatic singleton feature
        // object can only be instantiated once
        $object = $manager->get('Milton\ObjectManagerTut\Model\Example');
        $output -> writeln($object -> getHelloMessage());

        //writes out code from Example.php
        $object = $manager->create('Milton\ObjectManagerTut\Model\Example');
        $output -> writeln($object -> getHelloMessage());

    }


}//end class testbed