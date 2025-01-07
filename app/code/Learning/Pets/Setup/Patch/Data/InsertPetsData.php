<?php


namespace Learning\Pets\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class InsertPetsData implements DataPatchInterface
{



    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    public function __construct(
       ModuleDataSetupInterface $moduleDataSetup

     ) {

        $this->moduleDataSetup = $moduleDataSetup;

    }
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $setup = $this->moduleDataSetup;

        $data[] = ['pet_name' => 'Steffy', 'customer_id' => '1'];
        $data[] = ['pet_name' => 'Vicky', 'customer_id' => '2'];

         $this->moduleDataSetup->getConnection()->insertArray(
            $this->moduleDataSetup->getTable('learning_pets'),
            ['pet_name', 'customer_id'],
            $data
        );     
        $this->moduleDataSetup->endSetup();
    }
    public function getAliases()
    {
        return [];
    }
    public static function getDependencies()
    {
        return [];
    }
}