<?php
namespace Milton\RepoTut\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use \Magento\Framework\ObjectManagerInterface;
use \Magento\Framework\App\State;

class Examples extends Command
{
    protected $objectManager;

    public function __construct(ObjectManagerInterface $objectManager, State $appState, $name = null)
    {
        $this -> objectManager = $objectManager;
        $appState -> setAreaCode('frontend');
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName("ps:examples");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repo = $this -> objectManager -> get('Magento\Catalog\Model\ProductRepository');
        $search_criteria = $this -> objectManager -> create('Magento\Framework\Api\SearchCriteriaInterface');
        $result = $repo -> getList($search_criteria);
        $products = $result -> getItems();

        foreach ($products as $product)
        {
                echo $product -> getSku(), "\n";
        }

    }
} //end class Examples