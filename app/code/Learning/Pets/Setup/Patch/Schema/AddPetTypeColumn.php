<?php
namespace Learning\Pets\Setup\Patch\Schema;

use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Psr\Log\LoggerInterface;

class AddPetTypeColumn implements SchemaPatchInterface
{
    private $moduleDataSetup;
    private $logger;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup, LoggerInterface $logger)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->logger = $logger;
    }

    public function apply()
    {
        $this->logger->info('Applying AddPetTypeColumn schema patch.');

        $connection = $this->moduleDataSetup->getConnection();
        $tableName = $this->moduleDataSetup->getTable('learning_pets');

        if (!$connection->tableColumnExists($tableName, 'pet_type')) {
            $connection->addColumn(
                $tableName,
                'pet_type',
                [
                    'type' => Table::TYPE_TEXT,
                    'length' => 100,
                    'nullable' => false,
                    'default' => 'dog',
                    'comment' => 'Pet Type'
                ]
            );
            $this->logger->info('Added pet_type column to learning_pets table.');
        } else {
            $this->logger->info('pet_type column already exists in learning_pets table.');
        }
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
