<?php

namespace Exercises\DataPatch\Setup\Patch\Data;
class PetsDataPatch implements \Magento\Framework\Setup\Patch\DataPatchInterface{


    private $moduleDataSetup;
    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup

    ){
        $this->moduleDataSetup = $moduleDataSetup;
    }
    public function getAliases(){
        return [];
    }
    public function apply(){

        $this->moduleDataSetup->startSetup();
        $data[] = ['pet_name' => 'Subharamani', 'customer_id' => '5'];
        $data[] = ['pet_name' => 'Vicky', 'customer_id' => '4'];
        $this->moduleDataSetup->getConnection()->insertArray('pets', ['pet_name', 'customer_id'], $data);
        $this->moduleDataSetup->endSetup();

    }
    public static function getDependencies(){
        return [];
    }
}