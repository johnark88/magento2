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
        //filter
        $filter_1  = $this -> objectManager
            ->create('Magento\Framework\Api\FilterBuilder')
            -> setField('sku')
            -> setConditionType('like')
            -> setValue('WSH11-28%Red')
            -> create();

        $filter_2 = $this -> objectManager
            ->create('Magento\Framework\Api\FilterBuilder')
            -> setField('sku')
            -> setConditionType('like')
            -> setValue('WSH11-28%Blue')
            -> create();




        //add filter to group
        $filter_group = $this -> objectManager
            -> create('Magento\Framework\Api\Search\FilterGroupBuilder')
            -> addFilter($filter_1)
            -> addFilter($filter_2)
            -> create();


        //add group to search criteria object
        $search_criteria = $this -> objectManager
            -> create('Magento\Framework\Api\SearchCriteriaBuilder')
            -> setFilterGroups([$filter_group])
            -> create();

        //query the repository for the objects
        $repo = $this -> objectManager -> get('Magento\Catalog\Model\ProductRepository');
        $result = $repo -> getList($search_criteria);
        $products = $result -> getItems();

        foreach ($products as $product)
        {
                echo $product -> getSku(), "\n";
        }

    }
} //end class Examples